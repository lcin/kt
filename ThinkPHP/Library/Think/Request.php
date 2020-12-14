<?php


namespace Think;


class Request
{
    /**
     * 获取当前请求的参数
     * @access public
     * @param string|array $name    变量名
     * @param mixed        $default 默认值
     * @param string|array $filter  过滤方法
     * @return mixed
     */
    public function param($name = '', $default = null, $filter = '')
    {
        if (empty($this->mergeParam)) {
            $method = $this->method(true);
            // 自动获取请求变量
            switch ($method) {
                case 'POST':
                    $vars = $this->post(false);
                    break;
                case 'PUT':
                case 'DELETE':
                case 'PATCH':
                    $vars = $this->put(false);
                    break;
                default:
                    $vars = [];
            }
            // 当前请求参数和URL地址中的参数合并
            $this->param      = array_merge($this->param, $this->get(false), $vars, $this->route(false));
            $this->mergeParam = true;
        }
        if (true === $name) {
            // 获取包含文件上传信息的数组
            $file = $this->file();
            $data = is_array($file) ? array_merge($this->param, $file) : $this->param;
            return $this->input($data, '', $default, $filter);
        }
        return $this->input($this->param, $name, $default, $filter);
    }


}