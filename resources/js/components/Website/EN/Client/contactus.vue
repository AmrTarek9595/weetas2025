<template>
    <main id="primary" class="site-main contact_us">

<section class="search-section py-5">
<div class="container py-3">
   <div class="row head">
       <div class="col-12 align-items-center justify-content-center">
           <h1 class="search-heading mt-2 mb-4 pb-2 text-center">Contact Us</h1>
           <h6 lass="text-center">Be a part of our vibrant community with such a rich history and well - known for its traditional arabic hospitality - so gracefully merged with the modern conveniences. Explore our luxury real estate and communities or make plans to visit and see them for yourself!</h6>
       </div>

   </div>
</div>
</section>


<section class="most-searched-section path_in_contact_us">
<div class="container">
   <div class="most-searched-urls">

       <ul class="searches-list">
        <p>Bahrain Properties / <span style="color: #FF0000;"> Contact Us</span></p>
       </ul>
   </div>
</div>
</section>

<section class="nearby my-4 py-4">
<div class="container">

      
<div class="row">
    <div class="col-lg-6">
        <div class="contact-info">
            <p class="py-4 text-left">Be a part of our vibrant community with such a rich history and well - known for its traditional arabic hospitality - so gracefully merged with the modern conveniences. Explore our luxury real estate and communities or make plans to visit and see them for yourself!</p>
            <h2>Our Office</h2>
            <p>Office No. 181 Building 190 ("Platinum Tower")</p>
            <p>Road 2803, Block 428 Seef District, Kingdom of Bahrain</p>
            <p>Email: <a href="mailto:info@weetas.com">info@weetas.com</a></p>
            <p>Website: <a href="http://www.weetas.com" target="_blank">www.weetas.com</a></p>
            <p>Telephone: +973 178 20 800</p>
            <p>Mobile: +973-39945399</p>
        </div>

    </div>    
    <div class="col-lg-6">
        <div class="contact-form">
            <h2>Have questions? Get in touch!</h2>
            <form>
                <label for="name">Name *</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email Address *</label>
                <input type="email" id="email" name="email" required>
                <label for="phone">Phone Number *</label>
                <input type="tel" id="phone" name="phone" required>
                <label for="message">Message *</label>
                <textarea id="message" name="message" rows="4" required></textarea>
                <label>
                    <input type="checkbox" name="subscribe"> I want to subscribe to Newsletter
                </label>
                <button type="submit">Submit</button>
            </form>
            <p>We will never share your personal information. <a href="#">Privacy Policy</a></p>
        </div>

    </div>
</div>


</div>
<div class="row map" >

    <div class="">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3621.779422790486!2d46.6510844!3d24.803005499999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2ee328b2d8ecff%3A0xa8fa4c3e7207dfe3!2z2YXYsdmD2LIg2KrYrNix2YrYrw!5e0!3m2!1sar!2seg!4v1740748314718!5m2!1sar!2seg" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

</div>
</section>



</main><!-- #main -->
</template>

<script>

export default {



}
</script>

<style lang="scss" scoped>
.contact_us{
    .head h6{
        color: white;
        font-weight: 400;
        text-align: center;
    }
    .path_in_contact_us{
        display: flex ;
        justify-content: center;
    }
    .nearby{
     text-align: center;
    }
    // .container {
    //         display: flex;
    //         justify-content: space-between;
    //         width: 100%;
    //         margin: 20px 0;
    //     }
        .contact-info, .contact-form {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
        }
        .contact-info h2, .contact-form h2 {
            color: #e74c3c;
        }
        .contact-info p, .contact-info a {
            margin: 10px 0;
            color: #333;
        }
        .contact-form form {
            display: flex;
            flex-direction: column;
        }
        .contact-form label {
            margin: 10px 0 5px;
        }
        .contact-form input, .contact-form textarea {
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .contact-form input[type="checkbox"] {
            margin: 0 10px 0 0;
        }
        .contact-form button {
            padding: 10px;
            background-color: #e74c3c;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .contact-form button:hover {
            background-color: #c0392b;
        }
        .map {

            margin: 20px 0;
            justify-content: center;margin-top: -6%;
         
        }
        @media only screen and (max-width: 600px) {

                .map{
                    margin-top:10%
                }            
                }
}

</style>