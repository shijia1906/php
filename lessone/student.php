#!/usr/bin/php
<?php


function showMainMenu()
{
    echo "===学生成绩管理系统===",PHP_EOL;
    echo "===1.添加===",PHP_EOL;
    echo "===2.修改===",PHP_EOL;
    echo "===3.查询===",PHP_EOL;
    echo "===4.删除===",PHP_EOL;
    echo "===5.遍历===",PHP_EOL;
    echo "===6.存储===",PHP_EOL;
    echo "===7.加载===",PHP_EOL;
    echo "===8.退出===",PHP_EOL;
}

function selectMenu()
{
    while(TRUE){
    showMainMenu();
    echo "请输入[1-8]";
    fscanf(STDIN,"%d",$m);

    switch($m){
        case 1:
            echo "添加学生 \n";
            addStu();
            break;
        case 2:
            echo "修改信息 \n";
            break;
        case 3:
            echo "查询信息 \n";
            through();
            break;
        case 4:
            echo "删除信息 \n";
            break;
        case 5:
            echo "遍历 \n";
            break;
        case 6:
            echo "存储 \n";
            break;
        case 7:
            echo "加载";
            break;
        case 8:
            exit;
        default:
            FALSE;
    }
    }
}

function addStu($stuinfo)
{
    $id = 0;
    while(TRUE){

        printf("请输入学生信息");

        fscanf(STDIN,"%s%s%d%d",$name,$sex,$en,$cn);

        if($name == 'q'){

            return $stuinfo;
            break;
        }

        $stuinfo[$id] = array('name' => $name, 'sex' => $sex, 
                                'en' => $en, 'cn' => $cn);

        var_dump($stuinfo);

        $id++;


    }
}

function through()
{

    $stuinfo = addStu();
    foreach($stuinfo as $key => $var){

        echo $key," ",$var['name'],"  ",$var['sex'],"  ",$var['en'],"\n";

    }
}

function main()
{
    //showMainMenu();
    selectMenu();
}

exit(main());


