## Unreleased

### Fix

- 文章封面视频在移动设备体验不佳
- 潜在的逻辑错误
- 文章有视频封面时重复显示文章标题
- **APlayer**: 歌词被遮挡
- **aplayer**: lyric
- 未提供选项"gfonts_api"的默认值导致错误
- className标记不正确
- 字体加载不正确
- 没有显示adminbar时依然在加载相关字体
- mashiro_logo 的字体资源在关闭相关选项时仍然加载
- pjax下登录/登出操作体验问题
- **登陆界面**: 背景界面虚化不工作
- 使用兼容php 7的语法
- Safari下导航栏mashiro logo意外换行
- safari下文章的发布时间meta意外换行
- **相册模板**: 允许部分非关键属性为空
- fonts设置
- 本地图支持jpeg
- **封面视频**: 选项cover_video_loop实际效果与描述不一致

### Feat

- 统一视频封面与图片封面的样式
- 懒加载非Hls的封面视频
- 未设置封面图片时依然可以使用文章视频封面
- use_as_thumb == 'only'
- 支持使用视频作为文章封面缩略图
- **重大更改** site-header z-index过高
- lightGallery
- 体验优化 标题栏头像暗色模式鼠标悬停时背景不协调
- **page:404**: 删除上报代码
- 现在登录不会打开新选项卡，并且会重定向回登录前界面
- **登陆界面**: 重大更改 使用body来显示登陆界面背景；使登陆面板更加可读与美观；移动不变的样式定义
- **登陆界面**: 超过3秒登陆界面的预加载动画会自行消失
- **aplayer**: update Meting 1.5.7 -> 1.5.11
- 设置项 在\<head\>注入HTML代码
- meta theme-color 使用主题设置的颜色值
- **封面视频**: 删除不必要的输出
- **封面视频**: 未启用时不输出相关HTML

### Perf

- 毋须再加载jQuery

### Refactor

- **page:404**: 更换js

## 2.2.7 (2021-09-13)

### Fix

- **登录模板**: 意义不明
- **登录模板**: php8报错
- **文章封面视频**: 逻辑问题
- **文章封面视频**:  $full_image_url为false时文章头部不显示
- **文章封面视频**: $header未使用
- **说说模板**: 插入链接后显示存在问题

### Feat

- **文章封面视频**: 修改#coverVideo的默认样式的定义层级
- 添加翻译项“EDIT"
- **封面视频**: 自动缩放适配
- **说说模板**: 删除空行
- **说说模板**: 更改时间表示

### Refactor

- **文章封面视频**:  合并两种视频的处理逻辑
- 提取返回“编辑本文章”的html的逻辑

### Perf

- **说说模板**: 缓存querySelector结果

## 2.2.6.1 (2021-08-27)

### Feat

- **Bilibili追番/追剧模板**: 标题截断
- **Bilibili追番/追剧模板**: 懒加载番剧封面

### Fix

- 选项中选择启用fancybox的时候实际上会启用baguetteBox

## 2.2.6 (2021-08-26)

### Fix

- **Bilibili追番/追剧模板**: 底部显示不正常
- **Bilibili追番/追剧模板**: 误触发pjax
- 重新修复评论区无法显示
- **Bilibili追剧模板**: 变成追番模板

## 2.2.5 (2021-08-25)

### Feat

- APlayer Proxy
- 切换评论显示顺序
- 自定义社交网络图标时可以设定标题

### Fix

- **Bilibili追剧/追番模板**: $item["new_ep"]['index_show']未定义导致错误
- **Bilibili追剧模板**: 部分剧集$total < 0 导致追番百分比计算错误
- 样式规则覆盖工作异常可能导致评论区不显示

### Refactor

- 追番/追剧模板

## 2.2.1 (2021-08-13)

## 2.2.0.1 (2021-07-30)

## 2.2.0 (2021-07-30)

### Feat

- ip源切换
- 增加选项 为页尾追加HTML代码 (#257)
- option "yiyan_api"
- 文章列表图模糊出现动画
- 深色模式文章卡片hover效果
- add css variable  --theme-skin-dark
- 文章卡片hover阴影效果

### Fix

- 页尾附加代码 script标签被过滤
- 优雅处理淘宝ip查询错误
- 移动端侧边栏背景色 删除透明通道
- 移动端侧边栏开启后，页面弹回开头
- 设置项code_highlight_prism_theme_light为空时，mashiro_option可能无法正确输出
- 使用古腾堡编辑器并打开图片懒加载时，图片不会显示懒加载动画
- 追番模板&&php8下的小问题
- 修复一个在php8下会在登陆模板可能出现的错误
- toc-container 宽度越界
- 验证码错误地默认打开
- 验证码错误地默认打开

### Refactor

- mashiro_option
- mashiro_option.audio 现在不会输出false，不影响前端判断
- js bundle entry “page”
- manifest程序重构(多线程支持,合并程序,自动分离两端图片[图片宽高判断])

## 2.1.1.1 (2021-06-01)

## 2.1.1 (2021-06-01)

### Fix

- get_next_post() 返回空字符串导致错误

## 2.1.0.2 (2021-05-24)

### Feat

- 选择是否开启封面下方弧形遮挡

### Fix

- 导航菜单白猫样式Logo与图片logo的互相替换问题
- 搜索结果页 推荐结果深色模式下字体颜色不正确
- $mashiro_logo undefined
- 移动端点击右上角图标无法返回主页
- openNav中site-branding未渲染

## 2.1.0.1 (2021-05-23)

## 2.1.0 (2021-05-20)

### Fix

- 页面背景
- 灯箱配置的输出错误
- PHP 8下封面rest api无法使用

### Feat

- 代码高亮配置
- preload 模糊过渡效果

## 2.0.1.1 (2021-02-02)

## 2.0.1 (2021-02-01)

## 2.0.0.2 (2021-01-23)

## 2.0.0.1 (2021-01-23)

## 2.0.0 (2021-01-23)

## 1.20.20 (2020-12-14)

## 1.20.11 (2020-10-26)

## 1.20.10 (2020-09-06)

## 1.20.7 (2020-08-23)

## 1.20.1 (2020-08-11)

## 1.20.0 (2020-08-10)

## 1.14.4.1 (2020-07-21)

## 1.14.4 (2020-07-18)

## 1.14.2 (2020-07-13)

## 1.14.1 (2020-07-12)

## 1.14.0 (2020-06-30)

## 1.13.6 (2020-06-01)

## 1.13.0 (2020-05-15)

## 1.12.9 (2020-05-04)

## 1.12.8 (2020-05-04)

## 1.12.7 (2020-05-03)

## 1.12.6 (2020-05-03)

## 1.12.5 (2020-05-03)

## 1.12.0 (2020-04-26)

## 1.11.4 (2020-04-19)

## 1.11.3 (2020-04-18)

## 1.11.2 (2020-04-16)

## 1.11.1 (2020-04-15)

## 1.11.0 (2020-04-13)

## 1.10.0 (2020-04-10)

## 1.9.3 (2020-04-07)

## 1.9.2 (2020-04-06)

## 1.9.1 (2020-04-05)

## 1.9.0 (2020-04-05)

## 1.8.4 (2020-04-03)

## 1.8.3 (2020-04-02)

## 1.8.2 (2020-04-01)

## 1.8.1 (2020-03-31)

## 1.8.0 (2020-03-31)

## 1.7.4 (2020-03-30)

## 1.7.3 (2020-03-30)

## 1.7.2 (2020-03-29)

## 1.7.1 (2020-03-29)

## 1.7.0 (2020-03-29)

## 1.6.4 (2020-03-28)

## 1.6.3 (2020-03-27)

## 1.6.2 (2020-03-27)

## 1.6.1 (2020-03-27)

## 1.6.0 (2020-03-27)

## 1.5.4 (2020-03-27)

## 1.5.3 (2020-03-26)

## 1.5.2 (2020-03-26)

## 1.5.1 (2020-03-26)

## 1.5 (2020-03-26)

## 1.2 (2020-03-25)

## 1.1.3 (2020-03-25)

## 1.1.2 (2020-03-25)

## 1.1.1 (2020-03-25)

## 1.1.0 (2020-03-25)

## 1.0.0 (2020-03-25)
