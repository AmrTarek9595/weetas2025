<template>
    <div class="container containerOfDashboard mb-5">
        <div class="sidebar">
            <div class="profile">
                <div class="avatar">J</div>
                <p>Hi, John Doe!</p>
            </div>
            <ul class="menu">
                <li><router-link to="dashboard">Dashboard</router-link></li>
                <li class="active"><router-link to="userprofile">My Profile</router-link></li>
                <li ><router-link to="myfavourite">My Favorite</router-link></li>

        
                <li><a href="#">Log out</a></li>
            </ul>

        </div>
        <section class="main_user_profile">
            
    <div class="container">
        <div class="profile-settings">
            <div class="profile-photo">
                <div class="photo-placeholder">J</div>
   
            </div>
            <form class="user-info">
                <label for="full-name">Full Name *</label>
                <input type="text" id="full-name" name="full-name" value="Jane Doe" required>

                <label for="preferred-location">Preferred Location *</label>
                <select id="preferred-location" name="preferred-location" required>
                    <option value="aljuffair">AlJuffair</option>
                </select>

                <label for="address">Address</label>
                <input type="text" id="address" name="address" value="AlJuffair, Bahrain">

                <label for="email">Email *</label>
                <input type="email" id="email" name="email" value="janedoe@gmail.com" required>
                <span class="verified-email">Verified Email</span>

                <label for="number">Number *</label>
                <div class="phone-number">
                    <select id="country-code" name="country-code" required>
                        <option value="bahrain">Bahrain</option>
                    </select>
                    <input type="text" id="phone" name="phone" value="+973" required>
                    <span class="verify-number">Verify your number</span>
                </div>

                <label>
                    <input type="checkbox" name="newsletter"> I want to receive newsletter and updates
                </label>

                <button type="submit" class="save-button">Save</button>
            </form>
        </div>

        <div class="change-password">
            <form>
                <label for="old-password">Old Password</label>
                <input type="password" id="old-password" name="old-password" required>

                <label for="new-password">New Password</label>
                <input type="password" id="new-password" name="new-password" required>

                <label for="confirm-password">Confirm New Password</label>
                <input type="password" id="confirm-password" name="confirm-password" required>

                <button type="submit" class="change-password-button">Change Password</button>
            </form>
        </div>
    </div>
        </section>

    </div>

</template>

<script>

    export default {

    

}
</script>

<style lang="scss" scoped>
.containerOfDashboard{
    display: flex;
}
.sidebar {
    width: 200px;
    background-color: #fff;
    border-radius: 10px;
 
    padding: 20px;
    text-align: center;
    bottom: 30;
}

.profile {
    margin-bottom: 20px;
}

.avatar {
    width: 60px;
    height: 60px;
    background-color: #f8d7da;
    color: #dc3545;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 30px;
    margin: 0 auto 10px;
}

.menu {
    list-style: none;
    padding: 0;
    margin: 0;
}

.menu li {
    margin: 10px 0;
}

.menu a {
    text-decoration: none;
    color: #333;
    display: block;
    padding: 10px;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.menu a:hover {
    background-color: #f0f0f0;
}

.menu .active a {
    background-color: #dc3545;
    color: #fff;
}
.main_user_profile{
    
    position: relative;
    top: 30;
    left: 30px;
    bottom: 30;
    width: 100%;

    .container {
    width: 100%;
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.profile-settings, .change-password {
    margin-bottom: 20px;
}

.profile-photo {
    text-align: center;
    margin-bottom: 20px;
}

.photo-placeholder {
    width: 100px;
    height: 100px;
    background-color: #f0f0f0;
    border-radius: 50%;
    display: inline-block;
    font-size: 50px;
    line-height: 100px;
    color: #ff6f61;
    margin-bottom: 10px;
}



.user-info label, .change-password label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

.user-info input, .user-info select, .change-password input {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.verified-email, .verify-number {
    color: green;
    font-size: 0.9em;
    margin-left: 10px;
}

.phone-number {
    display: flex;
    align-items: center;
}

.phone-number select, .phone-number input {
    flex: 1;
}

.phone-number span {
    margin-left: 10px;
}

input[type="checkbox"] {
    margin-right: 10px;
}

.save-button, .change-password-button {
    display: block;
    width: 100%;
    padding: 10px;
    background-color: #ff6f61;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.save-button:hover, .change-password-button:hover {
    background-color: #e9573f;
}
}

</style>