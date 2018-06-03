<?php

namespace app\index\controller;
use app\common\model\Course;


/**
 * Course 课程管理
 */
class CoursetwoController extends IndexController
{
    public function index(){
//        print_r(input('name'));die;
        $name = input('name');
        //方式一，Course对象
//        $course = new Course();
//        $courses = $course->paginate(2,false);

        //方式二，query的对象
        //第二个参：表达式like,between
        //第三个参：是表示查询的条件
        $courses = Course::where('name','like',"%$name%")->paginate(2,false);
//        Course::where('id','>',"2
//        Course::where(1)->paginate()
//        Course::where('name','like',"%$name%")->toArray()

//print_r(Course::where(1));die;
        $this->assign('coursesKey', $courses);
        return $this->fetch();
    }

}

