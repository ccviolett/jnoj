JNOJ Change Log
===============

该文件显示了各版本间的改变。`Enh` 表示添加新功能，`Chg` 表示修改功能，`Bug` 表示修复 Bug。

自 0.8.0 版本起，为更新方便，方括号内标注的 `web` 表示只修改了 Web 端；`db` 表示修改了数据库；`judge` 表示修改了判题部分。

请阅读 [update.md](https://github.com/shi-yang/jnoj/blob/master/docs/update.md) 来获取更新方法。

0.9.0 2019.6.6 (under development)
------------------
- Enh: [web、judge、db] 支持 OI 判题模式。**不兼容更新，更新后需要到后台设置页面修改oj名称、学校名称**
- Enh: [web] 私有比赛、作业模式。将比赛设为私有时，任何时候均只能由参赛用户访问。
- Bug: [web] 删除参赛用户导致无法访问榜单
- Bug: [web] 部分页面无法显示 katex 公式
- Enh: [web、db] 新增小组功能，可以创建小组，小组内可以创建比赛。**不兼容更新：移除作业功能，将作业功能放置在小组内创建**
- Enh: [web] 完善小组管理机制
- Enh: [web] 小组作业题解编辑
- Enh: [judge] OI 模式下存在子任务时，若子任务出错则不再测评该子任务
- Bug: [web] 比赛修改题目后状态页出错
- Bug: [web] 同一个用户可多次加入小组
- Enh: [web] 改进题目状态查询机制
- Bug: [judge] 可能的评测bug(TLE->RE)
- Enh: [web、db] 新增题目题解功能。每道题目都可以单独编写题解。
- Enh: [web] 可以创建、编辑可以自定义题目 ID，以保持题目ID的连贯性。
- Enh: [web] 可以删除题目讨论
- Bug: [web] OI赛制下比赛依然可以看到过题情况
- Enh: [web] OI赛制可以实时显示榜单
- Bug: [web] 比赛积分的计算问题
- Enh: [web] 管理员有权将隐藏题目添加到小组题目中
- Enh: [web] 比赛信息页显示过题情况
- Enh: [web] 增加 IOI 赛制、作业赛制。
- Chg: [web] 图片改用相对路径
- Enh: [web] 管理员可查看所有小组
- Enh: [web] 改进 OI 榜单的显示
- Enh: [web、polygon] 改进 polygon。需要重新对 polygon 进行编译。
- Enh: [web] 比赛结束五分钟后开放提交
- Bug: [web] 比赛页面切换题目不出现复制按钮
- Enh: [web] 当比赛仅参赛人员可见时，隐藏比赛所有信息
- Enh: [web] 支持比赛任意题目的删除
- Bug: [web] polygon 全部删除输入输出文件
- Bug: [web、polygon] polygon 无法根据标程出数据。需要重新对 polygon 进行编译。
- Enh: [web] 显示比赛结束后的榜单
- Bug: [web] 比赛结束后的提交导致榜单页面出错

0.8.0 2019.3.3
------------------
- Enh: [web] 添加 VIP 用户权限，可以将题目设为只有 VIP 用户可见
- Bug: [web] 修复 VIP 题目查询问题
- Bug: [web] 编辑私有题目时无法保存
- Enh: [web、judge] 对 Special Judge 引入 `testlib.h`，**该功能会导致与旧有的 Special Judge 写法不兼容**，
SPJ 的参数输入顺序修改为输入文件、选手输出、标准答案。**为保证SPJ题目的准确性，更新后需要你改写题目的SPJ**。具体参考OJ 的 Wiki。示例区别在于：
旧版本SPJ写法示例为`FILE * f_in = fopen(args[1],"r"); FILE * f_outr = fopen(args[2],"r");FILE * f_use = fopen(args[3],"r");`，
新版本SPJ写法示例为`FILE * f_in = fopen(args[1],"r"); FILE * f_user = fopen(args[2],"r");FILE * f_out = fopen(args[3],"r");`
- Enh: [web] 添加题目检索功能

0.7.0 2019.2.1
------------------------
- Enh: 汉化部分英文
- Bug: 修改密码后其它浏览器仍然可以自动登录
- Bug: 后台无法修改用户密码
- Enh: 增加 php 扩展缺失未能使用某些功能的提示
- Enh: 提交代码后自动刷新判题结果的状态
- Bug: 作业权限问题
- Enh: 完善题目讨论功能
- Bug: 样例2,3的输入为0时不能显示

0.6.0 2018.12.26
-----------------------
- Enh: 静态资源带版本号
- Bug: 比赛倒计时采用客户端时间的问题
- Chg: 执行 composer update 更新 vendor 
- Bug: 从其它OJ导入题目时可能导致的单词换行问题
- Chg: 优化未参赛用户对比赛页面的访问
- Enh: 比赛信息页面的题目列表显示过题状态
- Bug: 比赛批量生成帐号时间过长导致无法生成
- Bug: SPJ题目不可判
- Bug: 测试数据 out 文件无法上传
- Bug: 可能出现判题无结果的现象
- Bug: SPJ 模板的问题
- Bug: 榜单 E 的计算问题
- Enh: 封榜后以 pending 状态显示提交次数
- Bug: 提交代码的编辑器显示出错
- Enh: 可以在比赛页面设置题目显示状态
- Chg: 默认开启 O2
- Enh: 可以批量添加打星参赛用户
- Enh: 可以设置管理员
- Bug: 查看出错数据的权限问题
- Enh: 后台可编辑 SPJ 程序
- Chg: 问题页面查看代码
- Chg: 更新 vendor，移去一个不需要的插件
- Chg: 封榜后显示提交次数
- Bug: 滚榜及榜单的一些问题
- Bug: 题目页面无法上传数据
- Bug: 网站启用 https 的 socket 连接问题
- Bug: 无法发布多个公告

0.5.0 2018.12.2
-----------------------
- Chg: 优化线下赛参赛用户的个人主页
- Enh: 让代码打印页面支持浏览器打印
- Enh: 通过修改配置文件 `config/params.php` 设置封榜时间
- Bug: 滚榜显示打星队伍的问题
- Enh: 提交队列显示题目名称
- Bug: 比赛队列因 Pjax 需刷新才能查看代码等信息的问题
- Enh: 发布打印请求或者答疑时，给管理员发布弹窗信息
- Enh: 可以下载数据文件
- Enh: 可以在后台比赛页面为题目批量设置题目来源

0.4.0 2018.11.24
-----------------------

- Bug: 封榜后不再显示别人的提交
- Enh: 通过修改配置文件 `config/params.php` 的 `isShareCode` 参数来确定用户是否公开自己的代码
- Enh: 完善积分段位
- Bug: 修复上传图片功能
- Bug: 修复普通用户可以查看隐藏状态下题目信息
- Enh: 完善验题功能
- Enh: 多次登录失败后，出现验证码以提高安全性
- Bug: 重要的安全更新
- Bug: 比赛中无法给某个用户发送回复弹窗
- Enh: 批量同步 polygon 题目到题库中

0.3.0 2018.10.3
----------------

- Enh: 导入 hustoj 题目的功能
- Chg: 将 Markdown 编辑器换成富文本编辑器（为兼容其它OJ的数据迁移）
- Enh: 测试数据上传文件的功能
- Chg: KaTeX公式风格习惯调整（单个$识别符号为行内公式，双个$识别符号为多行公式）
- Enh: 完善题数排行页面的功能
- Bug: QQ号改为长整型
- Bug: 修复个人赛排序方式
- Enh: 在问题列表页面，对已解决问题增加个提示标签
- Bug: 修复rating计算
- Bug: 调整缓存依赖
- Enh: 代码高亮
- Enh: 代码编辑器
- Chg: 删除多余的管理员权限
- Enh: 在Polygon中添加验题的功能