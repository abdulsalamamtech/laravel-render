@extends('layout.layout')

    @section('content')
        

            <!-- menu bar -->
            <div class="menu">
                <ul type="none">
                    <a href="/home"><li>Home</li></a>
                    <a href="/explore"><li>Explor</li></a>
                    <a href="/feed"><li>Feed</li></a>
                    <a href="/terms"><li>Term</li></a>
                    <a href="/support"><li>Support</li></a>
                    <a href="/setting"><li>Setting</li></a>
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
    
    @endsection
