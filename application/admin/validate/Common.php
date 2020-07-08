<?php
// +----------------------------------------------------------------------
// | 海豚PHP框架 [ DolphinPHP ]
// +----------------------------------------------------------------------
// | 版权所有 2016~2019 广东卓锐软件有限公司 [ http://www.zrthink.com ]
// +----------------------------------------------------------------------
// | 官方网站: http://dolphinphp.com
// +----------------------------------------------------------------------

namespace app\admin\validate;

use think\Validate;

/**
 * 公共验证器
 * @package app\admin\validate
 */
class Common extends Validate
{
    //定义验证规则
    protected $rule = [
        'sort|排序'       => 'require|number|max:5',
        'title|标题'      => 'require',
        'name|名称'      => 'require',
    ];

    //定义验证提示
    protected $message = [
        'sort.require'   => '排序不能为空',
        'sort.number'    => '排序只能是数字',
        'sort.max'       => '排序数字最大长度5',
        'title.require'  => '标题不能为空',
        'name.require'   => '名称不能为空',
    ];

    // 定义场景，供快捷编辑时验证
    protected $scene = [
        'sort'          => ['sort'],
        'title'         => ['title'],
        'name'          => ['name'],
        'name_sort'     => ['name','sort'],
        'title_sort'    => ['title','sort']
    ];
}
