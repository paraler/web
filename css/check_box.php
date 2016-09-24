<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CheckBox</title>
    <style>
        .checkbox {
            width: 900px;
            padding: 3% 0%;
            margin: 50px auto;
            background-color: cornsilk;
            text-align: center;
        }

        .checkbox label {
            display: inline-block;
            width: 64px;
            height: 32px;
            margin-right: 10px;
            background-color: #ffffff;
            border: 1px solid #eeeeee;
            border-radius: 17px;
            cursor: pointer;
            position: relative;
            transition: background-color .2s ease-in;
        }

        .checkbox label:after {
            content: "";
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: #eeeeee;
            position: absolute;
            left: 1px;
            top: 1px;
            transform: translateX(0px);
            transition: transform .2s ease-in;
        }

        .checkbox [type="checkbox"]:checked + label {
            background-color: khaki;
            transition: background-color .2s ease-in;
        }

        .checkbox [type="checkbox"]:checked +label:after{
            transform: translateX(30px);
            transition: transform .2s ease-in;
        }

        .checkbox [type="checkbox"]{
            display: none;
        }
    </style>
</head>
<body>
<div class="checkbox">
    <input type="checkbox" id="checkbox-1">
    <label for="checkbox-1"></label>

    <input type="checkbox" id="checkbox-2">
    <label for="checkbox-2"></label>

    <input type="checkbox" id="checkbox-3">
    <label for="checkbox-3"></label>
</div>

</body>
</html>


