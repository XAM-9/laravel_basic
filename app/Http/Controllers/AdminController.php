<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    function blog()
    {
        // $blogs = DB::table('blogs')->get(); //ดึงข้อมูล
        $blogs = DB::table('blogs')->paginate(5); //ดึงข้อมูล แบ่งหน้า 
        return view('blog', compact('blogs')); //ส่งข้อมูล ไปยัง view blog 
    }

    function about()
    {
        $name = "Nakarin Wongsang";
        $date = "4 เมษายน 2568";

        return view('about', compact('name', 'date'));
    }

    function create()
    {
        return view('form');
    }

    function insert(Request $request)
    { // รับค่าจากฟอร์ม
        $request->validate([
            'title' => 'required | max:50', // ต้องมีข้อมูล และ ตัวอักษรไม่เกิน 50
            'content' => 'required'
        ], [
            'title.required' => 'กรุณาป้อนชื่อบทความของคุณ', //แก้ชื่อที่มันมีให้
            'title.max' => 'ชื่อบทความไม่ควรเกิน 50 ตัวอักษร',
            'content.required' => 'กรุณาป้อนเนื้อหาบทความของคุณ'
        ]);

        $data = [
            'title' => $request->title, // รับค่าจากฟอร์ม เก็บในตัวแปร $data
            'content' => $request->content
        ];

        DB::table('blogs')->insert($data); // เพิ่มข้อมูล บันทึก ลงฐานข้อมูล ตาราง blogs ใน database 
        return redirect('/blog');
    }

    function delete($id) // รับค่าจาก url ที่ส่งมา id
    {
        // dd($id); // แสดงข้อมูล debug
        DB::table('blogs')->where('id', $id)->delete(); 

        return redirect('/blog');
    }

    function changeStatus($id){ //
        $blogs = DB::table('blogs')->where('id', $id)->first(); // ดึงข้อมูล แก้ไข บทความ ตาม id ที่ส่งมา เพื่อแสดงข้อมูลในฟอร์ม แก้ไข 
        $data = [
            'status' => !$blogs->status
        ];

        DB::table('blogs')->where('id', $id)->update($data); 

        return redirect('/blog');

    }

    function edit($id){ //
        $blogs = DB::table('blogs')->where('id', $id)->first(); // ดึงข้อมูล แก้ไข บทความ ตาม id ที่ส่งมา เพื่อแสดงข้อมูลในฟอร์ม แก้ไข 
        return view('edit', compact('blogs'));
    }

    function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:50',
            'content' => 'required'
        ], [
            'title.required' => 'กรุณาป้อนชื่อบทความของคุณ',
            'title.max' => 'ชื่อบทความไม่ควรเกิน 50 ตัวอักษร',
            'content.required' => 'กรุณาป้อนเนื้อหาบทความของคุณ'
        ]);

        $data = [
            'title' => $request->title,
            'content' => $request->content
        ];

        DB::table('blogs')->where('id', $id)->update($data);
        return redirect('/blog')->with('success', 'อัปเดตบทความเรียบร้อยแล้ว');
    }

}

