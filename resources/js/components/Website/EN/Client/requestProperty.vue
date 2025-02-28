<template>
  <main id="primary" class="site-main">
                <section class="search-section py-5">
                    <div class="container py-3">
                        <div class="row">
                            <div class="col-12 align-items-center justify-content-center">
                                <h1 class="search-heading mt-2 mb-4 pb-2 text-center">List Your Property with Us</h1>
                            </div>

                        </div>
                    </div>
                </section>
                <section class="most-searched-section">
                    <div class="container">
                        <div class="most-searched-urls">

                            <ul class="searches-list">
                             <p>Properties for Rent / Contact Us / <span style="color: #FF0000;">Request a Property</span></p>
                            </ul>
                        </div>
                    </div>
                </section>
                <section class="nearby my-4 py-4">
                    <div class="container">

                        <div class="properties-list grid-list">
                           

                              
                                <form>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Name <span>*</span></label>
                                            <input type="text" class="form-control" placeholder="Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Email Address <span>*</span></label>
                                            <input type="email" class="form-control" placeholder="Email">

                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="form-group col-lg-6 col-sm-12">
                 
                                                <label>Number <span>*</span></label>
                                                <div class="into-form-contact-us">
                                                    <select class="form-control" style="width: 33.3%;">
                                                    <option selected disabled>Bahrain</option>
                                                    </select>
                                                    <input type="text" class="form-control" placeholder="Bahrain">
                                            </div>
                                           
                                        </div>
                                        <div class="form-group col-lg-6 col-sm-12">
                                            <label>Property Type <span>*</span></label>
                                            <select class="form-control">
                                                <option>1</option>
                                                <option>2</option>

                                            </select>

                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="form-group col-6">
                 
                                            <label>Number of Bedrooms <span>*</span></label>

                                            <select class="form-control">
                                            <option selected disabled>Number of Bedrooms</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>

                                        </select>
                                                 
                                        </div>

                                        <div class="form-group col-6">
                                            <label>Rent/Sale <span>*</span></label>
                                            <select class="form-control">
                                                <option disabled selected>Rent/Sale</option>
                                                <option>Rent</option>
                                                <option>Sale</option>

                                            </select>

                                        </div> 

                    

                                    </div>
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label>Commercial/Residencial <span>*</span></label>
                                            <select class="form-control">
                                                <option disabled selected>Commercial/Residencial</option>
                                                <option>2</option>

                                            </select>

                                        </div>
                                        <div class="form-group col-6">
                                            <label>Furnish Type<span>*</span></label>
                                            <select class="form-control">
                                                <option disabled selected>Furnish Type</option>
                                                <option>2</option>

                                            </select>

                                        </div>

                                    </div>
                            
                                    <div class="row">
                                        <div class="form-group col-12">
                                            <label for="price-bhd">Message<span class="asterisk">*</span></label>
                                            <textarea id="price-bhd" class="form-control" rows="10"> </textarea>
                                        </div>

                                    </div>
                            

                                    <div class="row justify-content-center">
                                        <div class="col-md-6">  
                                            <div class="form-group" style="justify-content: center;display: flex;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="tenant-buyer" >
                                                    <label class="form-check-label" for="tenant-buyer" style="width: 110%;">
                                                        I am a Tenant/Buyer (Not a Broker)
                                                    </label>
                                                </div>
                                            </div>
                                    
                                            <div class="form-group" style="justify-content: center;display: flex;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="newsletter" >
                                                    <label class="form-check-label" for="newsletter" style="width: 110%;">
                                                        I want to subscribe Newsletter
                                                    </label>
                                                </div>
                                            </div>
                                    
                                            <div class="form-group">
                                                <div class="form-check" style="justify-content: center;display: flex;">
                                                    <input class="btn btn-primary" type="submit" id="" value="Submit">  </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
    
                        </div>
                    </div>
                </section>
           





            </main>
</template>

<script>

    export default {

    

}
</script>

<style lang="scss" scoped>


</style>