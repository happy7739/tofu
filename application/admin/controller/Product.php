<?php
// +----------------------------------------------------------------------
// | 海豚PHP框架 [ DolphinPHP ]
// +----------------------------------------------------------------------
// | 版权所有 2016~2019 广东卓锐软件有限公司 [ http://www.zrthink.com ]
// +----------------------------------------------------------------------
// | 官方网站: http://dolphinphp.com
// +----------------------------------------------------------------------

namespace app\admin\controller;

use app\common\builder\ZBuilder;
use app\admin\model\Product as ProductModel;
use app\admin\model\ProductSort as ProductSortModel;
use app\admin\model\Attachment as AttachmentModel;

/**
 * 产品中心控制器
 * @package app\admin\controller
 */
class Product extends Admin
{
    /**
     * 单页列表
     * @return mixed
     * @throws \think\Exception
     * @throws \think\exception\DbException
     */
    public function index()
    {
        // 查询
        $map = $this->getMap();
        // 排序
        $order = $this->getOrder();
        // 数据列表
        $data_list = ProductModel::hasWhere('sort')->field('name')->where($map)->order($order)->paginate();
        foreach ($data_list as $key => &$value) {
            $img = AttachmentModel::where(['id'=>$value['img']])->field('path')->find();
            $value['type'] = '<div class="js-gallery"><img class="image" title="点击查看大图" data-original="'. PUBLIC_PATH . $img['path'].'" src="'. PUBLIC_PATH . $img['path'].'"></div>';
        }
        //分页数组
        $nav = ProductSortModel::where(['status'=>1])->order('sort')->field(['id','name'])->select();
        foreach ($nav as $key => $val){
            $nav_data[$val['id']] = $val['name'];
        }

        // 使用ZBuilder快速创建数据表格
        return ZBuilder::make('table')
            ->setTableName('home_product')
            ->setSearch(['title' => '标题']) // 设置搜索框
            ->setSearchArea([
                ['select', 'pid', '所属分页', '', '', $nav_data],
            ])
            ->addColumns([ // 批量添加数据列
                ['id', 'ID'],
                ['name', '所属分类'],
                ['type', '封面图'],
                ['title', '标题', 'text.edit'],
                ['time', '显示时间', 'text.edit'],
                ['create_time', '创建时间', 'datetime'],
                ['sort', '排序', 'text.edit'],
                ['status', '状态', 'switch'],
                ['is_tui', '首页显示', 'switch'],
                ['right_button', '操作', 'btn']
            ])
            ->addTopButtons('add,enable,disable,delete') // 批量添加顶部按钮
            ->addRightButtons(['edit', 'delete' => ['data-tips' => '删除后无法恢复。']]) // 批量添加右侧按钮
            ->addOrder('id,sort,create_time,is_tui,status')
            ->setRowList($data_list) // 设置表格数据
            ->addValidate('Common', 'title,sort')
            ->fetch(); // 渲染模板
    }

    /**
     * 新增
     * @return mixed
     * @throws \think\Exception
     */
    public function add()
    {
        // 保存数据
        if ($this->request->isPost()) {
            // 表单数据
            $data = $this->request->post();

            // 验证
            $result = $this->validate($data, 'Product');
            if(true !== $result) $this->error($result);

            if ($page = ProductModel::create($data)) {
                // 记录行为
                action_log('product_add', 'admin_product', $page['id'], UID, "添加产品");
                $this->success('新增成功', 'index');
            } else {
                $this->error('新增失败');
            }
        }

        //所属分页
        $list = ProductSortModel::where(['status'=>1])->order('sort')->field(['id','name'])->select();
        foreach ($list as $key => $val){
            $list_data[$val['id']] = $val['name'];
        }
        // 显示添加页面
        return ZBuilder::make('form')
            ->addSelect('pid', '选择所属分页', '请选择所属分页', $list_data)
            ->addFormItems([
                ['text', 'title', '页面标题'],
                ['text', 'desc', '简介'],
                ['image', 'img', '图片'],
                ['text', 'time', '显示时间'],
                ['ueditor', 'text', '页面内容'],
                ['number', 'sort', '排序','',0],
                ['radio', 'status', '立即启用', '', ['否', '是'], 1],
                ['radio', 'is_tui', '首页显示', '', ['否', '是'], 0]
            ])
            ->fetch();
    }

    /**
     * 编辑
     * @param null $id 单页id
     * @return mixed
     * @throws \think\Exception
     */
    public function edit($id = null)
    {
        if ($id === null) $this->error('缺少参数');

        // 保存数据
        if ($this->request->isPost()) {
            // 表单数据
            $data = $this->request->post();

            // 验证
            $result = $this->validate($data, 'Product');
            if(true !== $result) $this->error($result);

            if (ProductModel::update($data)) {
                // 记录行为
                action_log('product_edit', 'admin_product', $id, UID, "编辑产品");
                $this->success('编辑成功', 'index');
            } else {
                $this->error('编辑失败');
            }
        }

        $info = ProductModel::get($id);

        //所属分页
        $list = ProductSortModel::where(['status'=>1])->order('sort')->field(['id','name'])->select();
        foreach ($list as $key => $val){
            $list_data[$val['id']] = $val['name'];
        }
        // 显示编辑页面
        return ZBuilder::make('form')
            ->addSelect('pid', '选择所属分页', '请选择所属分页', $list_data ,$info['pid'])
            ->addFormItems([
                ['hidden', 'id'],
                ['text', 'title', '页面标题'],
                ['text', 'desc', '简介'],
                ['image', 'img', '图片'],
                ['text', 'time', '显示时间'],
                ['ueditor', 'text', '页面内容'],
                ['number', 'sort', '排序'],
                ['radio', 'status', '立即启用', '', ['否', '是']],
                ['radio', 'is_tui', '首页显示', '', ['否', '是']]
            ])
            ->setFormdata($info)
            ->fetch();
    }

    /**
     * 删除单页
     * @param array $record 行为日志
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     */
    public function delete($record = [])
    {
        return $this->setStatus('delete');
    }

    /**
     * 启用单页
     * @param array $record 行为日志
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     */
    public function enable($record = [])
    {
        return $this->setStatus('enable');
    }

    /**
     * 禁用单页
     * @param array $record 行为日志
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     */
    public function disable($record = [])
    {
        return $this->setStatus('disable');
    }

    /**
     * 设置单页状态：删除、禁用、启用
     * @param string $type 类型：delete/enable/disable
     * @param array $record
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     */
    public function setStatus($type = '', $record = [])
    {
        $ids        = $this->request->isPost() ? input('post.ids/a') : input('param.ids');
        $page_title = ProductModel::where('id', 'in', $ids)->column('title');
        return parent::setStatus($type, ['page_'.$type, 'admin_product', 0, UID, implode('、', $page_title)]);
    }

    /**
     * 快速编辑
     * @param array $record 行为日志
     * @return mixed
     */
    public function quickEdit($record = [])
    {
        $id      = input('post.pk', '');
        $field   = input('post.name', '');
        $value   = input('post.value', '');
        $page    = ProductModel::where('id', $id)->value($field);
        $details = '字段(' . $field . ')，原值(' . $page . ')，新值：(' . $value . ')';
        return parent::quickEdit(['product_edit', 'admin_product', $id, UID, $details]);
    }
}
