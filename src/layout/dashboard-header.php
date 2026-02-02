<?php
function DashboardHeader($title = 'title', $description = 'description', $user = 'user', $role = 'role') {
?>

    <header class="header">

        <div class="header-left">
            <h2><?php echo $title; ?></h2>
            <p><?php echo $description; ?></p>  
        </div>
        <div class="header-right">
            <div class="time">

                <div class="time-display">
                    <span class="time-box" id="hour">12</span>
                    <span class="separator">:</span>
                    <span class="time-box" id="minute">59</span>
                    <span class="separator">:</span>
                    <span class="time-box" id="second">59</span>
                </div>

                <p class="date-text">
                    Viernes, 28 de Mayo 2024
                </p>

            </div>
            <div class="user-info">
                <div class="user">
                    <p class="user-name"><?php echo $user;?></p>
                    <p class="user-role"><?php echo $role;?></p>
                </div>
                <div class="user-image"></div>
            </div>
        </div>

    </header>

<?php
}
?>