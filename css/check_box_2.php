<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        .checkbox {
            width: 900px;
            padding: 3% 0px;
            margin: 50px auto;
            background-color: cornsilk;
            text-align: center;
        }

        .checkbox label {
            position: relative;
            display: inline-block;
            width: 30px;
            height: 30px;
            margin-right: 10px;
            overflow: hidden;
            border: 1px solid #eeeeee;
            background-color: #ffffff;
            cursor: pointer;
        }

        .checkbox label:after {
            content: "√";
            position: absolute;
            width: 28px;
            height: 28px;
            line-height: 26px;
            background-color: khaki;
            color: #ffffff;
            left: 1px;
            top: 1px;
            text-align: center;
            transform: translateY(-30px);
            transition: transform .2s ease-out;
            border-radius: 4px;
        }

        .checkbox [type="checkbox"]:checked + label:after {
            transform: translateY(0px);
            transition: transform .2s ease-in;
        }
        .checkbox [type="checkbox"]{
            display: none;
        }
    </style>
</head>
<body>
<div class="checkbox">
    <input type="checkbox" id="checkbox-1" checked="checked">
    <label for="checkbox-1"></label>

    <input type="checkbox" id="checkbox-2">
    <label for="checkbox-2"></label>

    <input type="checkbox" id="checkbox-3">
    <label for="checkbox-3"></label>
</div>

</body>
</html>