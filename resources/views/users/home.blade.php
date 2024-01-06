<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home GasRider</title>

    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            width: 100%;
            background-color: #f4f4f4;
        }
        .page{
            max-width: 1020px;
            padding: 20px auto;
            margin: 0 auto;
        }
        .container{
            padding: 20px 50px;
        }
        .row{
            display: flex;
            align-items: top;
            justify-content: center;
            gap: 50px;
        }
        .menu, .post-box, .search-box{
            background-color: #fff;
            padding: 20px;
            line-height: 2;
            font-size: 120%;
        }
        input{
            height:30px;
            text-align: left;
            padding: 8px;
        }
        button{
            font-size: 15px;
            padding: 8px 12px;
        }
    </style>
</head>
<body>
    <div class="page">
        <div class="container row">

            <!-- menu bar -->
            <div class="menu">
                <ul type="none">
                    <a href=""><li>Home</li></a>
                    <a href=""><li>Explor</li></a>
                    <a href=""><li>Feed</li></a>
                    <a href=""><li>Term</li></a>
                    <a href=""><li>Support</li></a>
                    <a href=""><li>Setting</li></a>
                </ul>
                <a href="">
                    <button>View Profile</button>
                </a>
            </div>
            <!-- end of menu bar -->

            <!-- feed -->
            <div class="post-box">
                <div class="post">
                    <h3>Share your ideas</h3>
                    <form action="">
                        <input type="text" name="post" id="post">
                        <button>post</button>
                    </form>
                </div>

                <div class="comment-box">
                    <div class="comment">
                        <p>
                            Lorem ipsum dolor sit, amet 
                            consectetur adipisicing elit. 
                            Commodi blanditiis accusantium 
                            fuga ad deserunt. Iste ad distinctio 
                            nostrum vel dicta!
                        </p>
                    </div>
                </div>
            </div>
            <!-- end of feed -->

            <!-- explore -->
            <div class="explore">
                <div class="search-box">
                    <h3>Search</h3>
                    <form action="">
                        <input type="text" name="search" id="search">
                        <button>Search</button>
                    </form>
                </div>
            </div>
            <!-- end of explore -->
        </div>
    </div>
</body>
</html>