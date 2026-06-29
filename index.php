<?php
// 如果带了 viewInfo 参数，仍然可以查看 phpinfo（为了兼容）
if (isset($_GET['viewInfo'])) {
    phpinfo();
    exit;
}
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>项目管理后台 - 导航</title>
    <style>
        body {
            font-family: "Microsoft YaHei", sans-serif;
            background: #f5f7fa;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            flex-direction: column;
        }
        .container {
            max-width: 800px;
            width: 100%;
            background: #fff;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            color: #2c3e50;
            border-bottom: 2px solid #3498db;
            padding-bottom: 15px;
            margin-top: 0;
        }
        .desc {
            text-align: center;
            color: #7f8c8d;
            margin-bottom: 30px;
        }
        .card-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
        .card {
            background: #f8f9fa;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            transition: transform 0.2s, box-shadow 0.2s;
            border: 1px solid #e9ecef;
        }
        .card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 16px rgba(0,0,0,0.08);
            border-color: #3498db;
        }
        .card a {
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
            color: #2980b9;
            display: block;
            margin-bottom: 6px;
        }
        .card a:hover {
            color: #1a5276;
        }
        .card .badge {
            display: inline-block;
            background: #3498db;
            color: #fff;
            font-size: 12px;
            padding: 2px 10px;
            border-radius: 20px;
            margin-bottom: 10px;
        }
        .card p {
            margin: 10px 0 0;
            font-size: 14px;
            color: #6c757d;
        }
        .footer {
            margin-top: 30px;
            text-align: center;
            font-size: 13px;
            color: #95a5a6;
            border-top: 1px solid #ecf0f1;
            padding-top: 20px;
        }
        .footer a {
            color: #3498db;
            text-decoration: none;
        }
        @media (max-width: 600px) {
            .card-grid { grid-template-columns: 1fr; }
            .container { padding: 20px; }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🚀 管理后台导航</h1>
        <p class="desc">点击下方卡片进入对应的管理功能</p>

        <div class="card-grid">
            <!-- 1. Webhook 接收端 -->
            <div class="card">
                <span class="badge">入口</span>
                <a href="/public/webhook.php">📨 Webhook 接收</a>
                <p>QQ 服务器事件推送接入，处理消息与回调验证</p>
            </div>

            <!-- 2. 管理后台 -->
            <div class="card">
                <span class="badge">管理</span>
                <a href="/public/admin.php">⚙️ 插件管理</a>
                <p>可视化开关插件，查看插件详细信息</p>
            </div>

            <!-- 3. 后端 API -->
            <div class="card">
                <span class="badge">API</span>
                <a href="/public/api.php">🔌 管理 API</a>
                <p>管理后台的后端接口（供 admin.php 调用）</p>
            </div>

            <!-- 4. 插件生成器 -->
            <div class="card">
                <span class="badge">工具</span>
                <a href="/public/plugin_generator.php">🛠️ 插件生成器</a>
                <p>可视化配置生成完整 PHP 插件代码</p>
            </div>

            <!-- 额外：生成器 API（如果你需要直接访问） -->
            <div class="card" style="grid-column: span 2; background: #eaf2f8;">
                <span class="badge" style="background: #27ae60;">后端</span>
                <a href="/public/plugin_generator_api.php">⚡ 生成器 API</a>
                <p>插件生成器的后端接口（测试 + 生成代码）</p>
            </div>
        </div>

        <div class="footer">
            <p>🔒 出于安全考虑，请及时修改默认密码（admin/admin）和 MySQL 空密码。</p>
            <p>KSWEB 项目 · <a href="https://www.kslabs.ru/" target="_blank">官方网站</a> · 
               <a href="mailto:dkcocto@gmail.com">联系我们</a></p>
            <p><a href="/index.php?viewInfo=1">点击查看 PHP 信息</a>（仅调试用）</p>
        </div>
    </div>
</body>
</html>