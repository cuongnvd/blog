<div class="grid_2">
    <div class="box sidemenu">
        <div class="block" id="section-menu">
            <ul class="section menu">
        <!--        <li><a class="menuitem">Site Option</a>
                    <ul class="submenu">
                        <li><a href="">Title & Slogan</a></li>
                        <li><a href="social.php">Social Media</a></li>
                        <li><a href="copyright.php">Copyright</a></li>
                        
                    </ul>
                </li> -->
				
                 <li><a class="menuitem">NGƯỜI DÙNG</a>
                    <ul class="submenu">
                        <li><a a href="{{route('useradd')}}">THÊM</a></li>
                        <li><a a href="{{route('userlist')}}">DANH SÁCH</a></li>
                    </ul>
                </li>
				<li><a class="menuitem">CHỦ ĐỀ</a>
                    <ul class="submenu">
                        <li><a href="{{route('themeadd')}}">THÊM</a> </li>
                        <li><a href="{{route('themelist')}}">DANH SÁCH</a> </li>
                    </ul>
                </li>
                <!-- <li><a class="menuitem">Category Option</a>
                    <ul class="submenu">
                        <li><a href="addcat.php">Add Category</a> </li>
                        <li><a href="catlist.php">Category List</a> </li>
                    </ul>
                </li> -->
                <li><a class="menuitem">TIN TỨC</a>
                    <ul class="submenu">
                        <li><a href="{{route('newsadd')}}">THÊM</a> </li>
                        <li><a href="{{route('newslist')}}">DANH SÁCH</a> </li>
            
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>