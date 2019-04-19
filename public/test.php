<?php
/**
 * 递归实现无限极分类
 * @param $item 需要递归的数据
 * @param $ware_pid 父ID
 * @param $level 分类级别
 * @return $list 分好类的数组 直接遍历即可 $level可以用来遍历缩进
 */

function getTree($item, $ware_pid = 0, $level = 0)
{

    //声明静态数组, 防止多次声明导致数组覆盖
    static $list = [];

    foreach ($item as $key => $value) {

        //第一次遍历,找到父节点为根节点 也就是 $pid = 0 的节点
        if ($value['ware_pid'] == $ware_pid) {

            $value['level'] = $level;

            //把数组放到list中
            $list[] = $value;

            //把这个节点从数组中移除,减少后续递归消耗
            unset($item[$key]);

            // 递归调用
            getTree($item, $value['id'], $level + 1);

        }
    }
    return $list;
}

$test_arr = [
    [
        'ware_pid' => "0",
        "ware_name" => "唐山总仓",
        "parent_path" => "/1/",
        "id" => 1,
        "ware_type" => 1
    ],
    [
        'ware_pid' => "1",
        "ware_name" => "唐山分仓",
        "parent_path" => "/1/2/",
        "id" => 2,
        "ware_type" => 2
    ],
    [
        'ware_pid' => "0",
        "ware_name" => "天津总仓",
        "parent_path" => "/4/",
        "id" => 4,
        "ware_type" => 1
    ],
    [
        'ware_pid' => "4",
        "ware_name" => "天津分仓",
        "parent_path" => "/4/5/",
        "id" => 5,
        "ware_type" => 2
    ],
    [
        'ware_pid' => "2",
        "ware_name" => "唐山门店仓",
        "parent_path" => "/1/2/7/",
        "id" => 7,
        "ware_type" => 4
    ],
    [
        'ware_pid' => "1",
        "ware_name" => "唐山门店仓",
        "parent_path" => "/1/7/",
        "id" => 8,
        "ware_type" => 4
    ]
];


/*
 * 获得递归完的数据,遍历生成分类
 */
$array = getTree($test_arr);

foreach ($array as $value) {
    echo str_repeat('├─ ', $value['level']) . $value['ware_name'] . "<br>";
}

function make_tree($list, $pk = 'id', $pid = 'ware_pid', $child = 'children', $root = 0)
{
    $tree = [];
    $packData = [];
    foreach ($list as $data) {
        $packData[$data[$pk]] = $data;
    }
    foreach ($packData as $key => $val) {
        if ($val[$pid] == $root) {
            //代表根节点
            $tree[] =& $packData[$key];
        } else {
            //找到其父类
            $packData[$val[$pid]][$child][] =&$packData[$key];
        }
    }
    return $tree;
}


//echo "<pre>";
//var_dump(make_tree($array));
//echo "</pre>";

//<script>
//    function getTree(json, pid = 0, level = 0)
//    {
//        var list = [], temp;
//
//        for (var i = 0; i < json.length; i++) {
//        if (json[i]['ware_pid'] == pid) {
//            var obj = {"id": json[i]['id'], "ware_name": json[i]['ware_name'], "children": ""};
//                temp = getTree(json, json[i]['id'], level + 1);
//                if (temp.length > 0) {
//                    obj.children = temp;
//                }
//                list.push(obj);
//            }
//    }
//
//        return list;
//
//    }
//    var json = [{"ware_pid":"0","ware_name":"\u5510\u5c71\u603b\u4ed3","parent_path":"\/1\/","id":1,"ware_type":1},{"ware_pid":"1","ware_name":"\u5510\u5c71\u5206\u4ed3","parent_path":"\/1\/2\/","id":2,"ware_type":2},{"ware_pid":"0","ware_name":"\u5929\u6d25\u603b\u4ed3","parent_path":"\/4\/","id":4,"ware_type":1},{"ware_pid":"4","ware_name":"\u5929\u6d25\u5206\u4ed3","parent_path":"\/4\/5\/","id":5,"ware_type":2},{"ware_pid":"2","ware_name":"\u5510\u5c71\u95e8\u5e97\u4ed3","parent_path":"\/1\/2\/7\/","id":7,"ware_type":4},{"ware_pid":"1","ware_name":"\u5510\u5c71\u95e8\u5e97\u4ed3","parent_path":"\/1\/7\/","id":8,"ware_type":4}];
//    var text = getTree(json);
//    console.log(JSON.stringify(text));
//</script>
