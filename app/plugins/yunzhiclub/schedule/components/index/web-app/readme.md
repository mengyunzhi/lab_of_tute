# 前提
在模板中，引入`anguarjs`以及`ui-router`。参考：`项目根路径/themes/tute/layouts/tute.htm`。
# 安装依赖
`npm install && npm install gulp-cli -g`  
安装成功后，执行`gulp`

# 说明
`gulp`起动后，主要做以下三件事情：
1. 将所有的`js`文件打包，并将打包后的`index.min.js`移至`插件根目录\assets\js`目录中。
2. 将所有的`html`文件复制至`项目根目录\themes\yunzhiclub\assets`中。
3. 监视文件变化，产生变化后，重新执行1，2两步

# angularjs规范
设置路由时，应该将`templateUrl`设置为`/themes/yunzhiclub/assets/xxx.html`。
如果本项目运行在**非**根目录的环境中，那么，需要在设置URL中，加入项目目录，比如：`xxx/themes/...`

在进行`ajax`交互时，需要在`index.php`中定相关方法，方法名必须以`on`为前缀。前台进行请求时，以请求方法`onSaveSubmit`为例为:
```js
 self.save = function(data) {
        var headers = {
            'X-OCTOBER-REQUEST-HANDLER': 'onSaveSubmit',
            'X-Requested-With': 'XMLHttpRequest'
        };
        return $http.post('', data, {headers: headers});
    };
```
必须加入上述两项信息，否则请求不到相关方法。具体返回结果，参考官方文档：[https://octobercms.com/docs/ajax/introduction](https://octobercms.com/docs/ajax/introduction)
