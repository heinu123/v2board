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
        尊敬的用户您好！
        <hr />
        你的流量已经使用80%。为了不造成使用上的影响请合理安排流量的使用。
        <hr />
        <a href="{{$url}}">{{$name}}</a> | <a href="https://t.me/qcjs_channel">{{$name}}官方频道</a>
    </div>
<tbody>