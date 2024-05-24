    </thead>
    <title>{{$name}}</title>
        <style>
        /* 默认为浅色模式 */
        body {
            background-color: white;
            color: black;
        } 
        code {
            font-size: 20px;
            font-weight: bold;
        } 
        
        /* 深色模式 */
        @media (prefers-color-scheme: dark) {
            body {
                background-color: black;
                color: white;
            }
        }
        
        /* 创建一个白色背景框架 */
        .container {
            background-color: var(--bg-color);
            padding: 20px;
            margin: 20px;
            border-radius: 5px;
        }
    </style>
    </thead>
    <tbody>
    <div class="container">
    尊敬的用户您好
    <hr />
    你的服务将在24小时内到期。为了不造成使用上的影响请尽快续费。如果你已续费请忽略此邮件。
    <hr />
    <a href="{{$url}}">{{$name}}</a> | <a href="https://t.me/qcjs_channel">{{$name}}官方频道</a>
    </div>
    <tbody>

