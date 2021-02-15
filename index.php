<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="semantic.min.css"/>
    <title>Amona</title>
</head>
<style>
    body{
    text-align: center;
    /* background: #00ECB9; */
    font-family: sans-serif;
    font-weight: 100;
    }

    #clockdiv{
        font-family: sans-serif;
        color: #fff;
        display: inline-block;
        font-weight: 100;
        text-align: center;
        font-size: 30px;
    }

    #clockdiv > div{
        padding: 7px;
        border-radius: 3px;
        background: #00BF96;
        display: inline-block;
    }

    #clockdiv div > span{
        padding: 11px;
        border-radius: 3px;
        background: #00816A;
        display: inline-block;
    }

    .smalltext{
        padding-top: 5px;
        font-size: 16px;
    }
</style>
<body>
    <div class="ui cards " style="margin: 2em auto">
        <div class="card red" style="margin: 1em auto;width:100%" >
            <div class="content">
                <div class="header">Amna</div>
                <div id="head" style="margin-top: 5px" class="meta">Treasure</div>
                <div class="description" style="margin-top:3em">
                    <h4 class="ui header">I Hate Wating, But If It's Wating For <blockquote style="color:red">You</blockquote> I will Wait.</h4>
                    <div id="clockdiv">
                        <div>
                            <span class="days"></span>
                            <div class="smalltext">Days</div>
                        </div>
                        <div>
                            <span class="hours"></span>
                            <div class="smalltext">Hours</div>
                        </div>
                        <div>
                            <span class="minutes"></span>
                            <div class="smalltext">Minutes</div>
                        </div>
                        <div>
                            <span class="seconds"></span>
                            <div class="smalltext">Seconds</div>
                        </div>
                        <br>
                        <br>
                        <div>
                            <span class="months"></span>
                            <div class="smalltext">Weeks</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    var names = ["Chica","Treasure","Gorgeous",'Honey','Bunch','Candy','Caramel','Gummie Bear','Gummy Bear','Peaches','Peachy Pie','Pumpkin','Pumpkin pie',
    'Butter Cup','Cherry','Cookie','Cookie Monster','Sugar','Sugar Lips','Sugar Plum','Sweetie','Sweetheart','Sweetness','Sweet Heart','Kit Kat','Tootsie Roll',
    'Lolipop','Fruit Loop','Donut','Monkey Muffins','Cupcake','Waffles','Sprinkles','Cuddle Cake','Dumpling','Sweet Butt','Sweet Cakes','Sweet Pea','Sweetie Pie'
    ,'Sweetkins','Sugar Smacks','Snuggle Muffin','Honey Bee','Jellybean','Love Muffin','Yummy','Toffee','Marshymallow','Marshmallow','Skittle','Almond Joy','M&M'
    ,'Hershey’s','Rolo','Sweet Potato','Snickers','Twix','Shortcake','Brown Sugar','Oreo','Cream','Eyecandy','Cuddle Muffin','Cinnamon','Cinnamon Girl'
    ,'Blueberry Pie','Sugar Mouse','Sugar Sauce','Tic Tac','Candy Cane','Sugar Bomb','2662','Pudding Pop','Snuggle Pie'];

    setInterval(function(){
        let i = Math.floor(Math.random() * 72) + 1;
        document.getElementById("head").innerHTML = names[i];
    }, 5000);

    function getTimeRemaining(endtime) {
        var t = Date.parse(endtime) - Date.parse(new Date());
        var seconds = Math.floor((t / 1000) % 60);
        var minutes = Math.floor((t / 1000 / 60) % 60);
        var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
        var days = Math.floor(t / (1000 * 60 * 60 * 24));
        var months = Math.floor(days /7);
        return {
            'total': t,
            'months': months,
            'days': days,
            'hours': hours,
            'minutes': minutes,
            'seconds': seconds
        };
    }

    function initializeClock(id, endtime) {
        var clock = document.getElementById(id);
        var monthsSpan = clock.querySelector('.months');
        var daysSpan = clock.querySelector('.days');
        var hoursSpan = clock.querySelector('.hours');
        var minutesSpan = clock.querySelector('.minutes');
        var secondsSpan = clock.querySelector('.seconds');

        function updateClock() {
            var t = getTimeRemaining(endtime);

            monthsSpan.innerHTML = t.months;
            daysSpan.innerHTML = t.days;
            hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
            minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
            secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

            if (t.total <= 0) {
            clearInterval(timeinterval);
            }
        }

        updateClock();
        var timeinterval = setInterval(updateClock, 1000);
    }

    var deadline = new Date("2020-8-29 00:00:00");
    initializeClock('clockdiv', deadline);
</script>
</html>
