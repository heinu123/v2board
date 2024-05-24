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
    您的验证码是：
    <br />
    <code>{{$code}}</code>
    <br />
    <br />
    请在 5 分钟内进行验证。如果该验证码不为您本人申请，请无视。
    <hr />
    
    <a href="{{$url}}">{{$name}}</a> | <a href="https://t.me/qcjs_channel">{{$name}}官方频道</a>
    </div>
    <tbody>

