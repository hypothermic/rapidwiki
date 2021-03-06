<header>
    <div style="min-height: 2px; height: 2px; max-height: 2px; background: #282828;"></div>
    <ul class="header hdr-sitebar">
        <li>
            <h1>My Awesome Wiki</h1>
        </li>
        <li>
            <div class="hdr-sitebar-menu">
                <ul class="hdr-sitebar-selector">
                    <li>
                        <a href="">Start</a>
                    </li>
                    <li>
                        <a href="">Navigation</a>
                    </li>
                    <li>
                        <a href="">About Us</a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
    <div class="header hdr-color"></div>
    <style>
    body {
        margin: 0;
        border: 0;
        padding: 0;
    }
    .header {
        margin: 0;
        border: 0;
        outline: 0;
        box-sizing: border-box;
        width: 100%;
        font-family: 'Roboto', Arial, Helvetica Neue, Helvetica, sans-serif;
    }
    .hdr-color {
        background: #00c3ff;
        min-height: 4px;
        height: 4px;
        max-height: 4px;
    }
    .hdr-sitebar {
        padding: 0.9rem 0;
        position: relative;
        list-style: none;
        text-align: center;
        background: #282828;
    }
    .hdr-sitebar li {
        display: inline-block;
        vertical-align: middle;
    }
    .hdr-sitebar h1 {
        margin: 0;
        color: white;
        text-align: center;
        font-size: 2.47rem;
        padding: 1rem;
    }
    /*.hdr-sitebar h1:hover {
        -webkit-transform: scale(1.3);
        -ms-transform: scale(1.3);
        transform: scale(1.3);
    }*/
    .hdr-sitebar-menu {
        background: #282828;
        padding: 1.2rem 1.6rem;
    }
    .hdr-sitebar-selector {
        display: inline-block;
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        position: -webkit-sticky; /* Safari */
        position: sticky;
        top: 0;
    }
    .hdr-sitebar-selector li {
        float: left;
        border-right: 1px solid #00c3ff;
    }
    .hdr-sitebar-selector li:last-child {
        border-right: none;
    }
    .hdr-sitebar-selector li a {
        display: inline-block;
        color: white;
        text-align: center;
        padding: 8px 16px;
        text-decoration: none;
    }
    </style>
</header>