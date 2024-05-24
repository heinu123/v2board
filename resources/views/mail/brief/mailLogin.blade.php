</thead>
    <title>{{$name}}</title>
    <style>
        body {
            background-color: white;
            color: black;
        } 
        code {
            font-size: 20px;
            font-weight: bold;
        } 
        @media (prefers-color-scheme: dark) {
            body {
                background-color: black;
                color: white;
            }
        }
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
您正在登入到{{$name}}, 请在 5 分钟内点击下方链接进行登入
<br />
<a href="{{$link}}">{{$link}}</a>

<br />
<br />
如果您未授权该登入请求，请无视。
<hr />

<a href="{{$url}}">{{$name}}</a> | <a href="https://t.me/qcjs_channel">{{$name}}官方频道</a>
</div>
<tbody>