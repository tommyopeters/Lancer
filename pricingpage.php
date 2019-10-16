<!DOCTYPE html>
<html>
            <head>
            
                 <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
                  <script src="https://kit.fontawesome.com/d4f2148171.js" crossorigin="anonymous"></script>       
                  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
                  <meta name="viewport" content="width=device-width, initial-scale=1">
            </head>
            
                 <style>
                     .navbar-brand{
    font-family: Pacifico;
    color: white
}
.navbar-brand h3 span{
    color: #0ABAB5
}
.navbar-brand :hover{
    color: rgb(255, 255, 255);
}

.pricing-header{
    background: #091429
}

.pricing-header .nav-link{
   font-size: 15px;
   color: aliceblue;
}

.navbar-collapse{
    justify-content: flex-end
}

.pricing{
    width: 100%;
    padding: 70px;
}


.pricing .title-header{
    text-align: center
}

.pricing .title-header h1{ 
    font-size: 65px;
    padding-left: 160px;
    padding-right: 160px;
}
.pricecol{
    height: 450px;
    border: 1px solid rgb(197, 132, 132);
    position: relative;
}
.pricetext{
    text-align: center;
    font-size: 30px;

}
.pricenumber{
    text-align: center;
    font-size: 48px;
    
}

.price-button{
    width: 100%;
    position: absolute;
    bottom: 2%;
    left:0;
}

.pricelist{
    list-style: none;
}
.pricelist li{
    margin: 5px auto
}
.pricelist li span{
    margin: auto 5px
}

.price-button a{
    background: #0ABAB5;
    color: #fff;
    border: none
}


.price-button a:hover{
    background: rgb(9, 155, 150);
}

.pricenumber::before{
    font-size: 17px;
    content: '\0024';
    position: relative;
    left: -2px;
    top: -25px
}

.pricenumber{
    position: relative;
}

.pricenumber p{
    font-size: 17px;
    display: inline;
}
article {
    background-color:#091429;
    padding: 25px;
}

footer {
    background-color: white;
    padding: 25px;
}

.enter-div {
    text-align: center;
    color: white;
    font-weight: normal;
    font-style: normal;
    
}

#enter-line {
    line-height: 65px;
}

#lancer {

font-style: normal;
font-weight: normal;
font-family: 'Pacifico', cursive;
font-size: 20px;
}

#btn-sub {
    background: #0ABAB5;
    border-radius: 4px;
    color: #FFFFFF;
}

#email-input {
background: #FFFFFF;
border: 1px solid #C4C4C4;
box-sizing: border-box;
border-radius: 2px;
color: black;
}

.btn {
background: #091429;
border: 1px solid #0ABAB5 ;
color: #0ABAB5;
box-sizing: border-box;
border-radius: 6px;
}

.link {
    color: black;
}


@media only screen and (max-width: 600px) {
    .pricing .title-header h1{
        padding: 0;
        font-size: 35px
    }
    .pricing{
        padding: 20px;
    }

    

    .pricecol{
        margin: 20px auto
    }
  }
                 </style>
            </head>

            <nav class="pricing-header navbar pl-5 pr-5 navbar-expand-lg ">
                    <a class="navbar-brand" href="pricing.html"> <h3>Lan<span>c</span>er</h3> </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                      <div class="navbar-nav" >
                        <a class="nav-item nav-link" href="pricing.html">Pricing <span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" href="#">Generate an Invoice</a>
                        <a class="nav-item nav-link" href="#">Track a Project</a>
                        <a class="nav-item nav-link" href="#">Sign in</a>
                        <a class="nav-item nav-link" href="#">Sign up</a>
                      </div>
                    </div>
                  </nav>
                  
    <body>
        <section class="pricing">
            <div class="container">
                <div class="title-header">
                    <h1>Choose a plan that works for you</h1>
                </div>
                <div class="row mt-5 pt-5">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="pricecol p-2 pt-4">
                        <p class="pricetext">Starter</p>
                        <div class="price">
                                <h5 class="pricenumber">0.00<p>/mo</p></h5>
                            </div>
                            
                        <ul class="pricelist pt-3">
                            <li>
                                <span><svg width="16" height="16" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 10.0857V11.0057C20.9988 13.1621 20.3005 15.2604 19.0093 16.9875C17.7182 18.7147 15.9033 19.9782 13.8354 20.5896C11.7674 21.201 9.55726 21.1276 7.53447 20.3803C5.51168 19.633 3.78465 18.2518 2.61096 16.4428C1.43727 14.6338 0.879791 12.4938 1.02168 10.342C1.16356 8.19029 1.99721 6.14205 3.39828 4.5028C4.79935 2.86354 6.69279 1.72111 8.79619 1.24587C10.8996 0.770634 13.1003 0.988061 15.07 1.86572" stroke="#091429" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M21 3.00574L11 13.0157L8 10.0157" stroke="#091429" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg></span>Active projects</li>
                            <li><span><svg width="16" height="16" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 10.0857V11.0057C20.9988 13.1621 20.3005 15.2604 19.0093 16.9875C17.7182 18.7147 15.9033 19.9782 13.8354 20.5896C11.7674 21.201 9.55726 21.1276 7.53447 20.3803C5.51168 19.633 3.78465 18.2518 2.61096 16.4428C1.43727 14.6338 0.879791 12.4938 1.02168 10.342C1.16356 8.19029 1.99721 6.14205 3.39828 4.5028C4.79935 2.86354 6.69279 1.72111 8.79619 1.24587C10.8996 0.770634 13.1003 0.988061 15.07 1.86572" stroke="#091429" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M21 3.00574L11 13.0157L8 10.0157" stroke="#091429" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg></span>  Three active projects</li>
                            <li><span><svg width="16" height="16" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 10.0857V11.0057C20.9988 13.1621 20.3005 15.2604 19.0093 16.9875C17.7182 18.7147 15.9033 19.9782 13.8354 20.5896C11.7674 21.201 9.55726 21.1276 7.53447 20.3803C5.51168 19.633 3.78465 18.2518 2.61096 16.4428C1.43727 14.6338 0.879791 12.4938 1.02168 10.342C1.16356 8.19029 1.99721 6.14205 3.39828 4.5028C4.79935 2.86354 6.69279 1.72111 8.79619 1.24587C10.8996 0.770634 13.1003 0.988061 15.07 1.86572" stroke="#091429" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M21 3.00574L11 13.0157L8 10.0157" stroke="#091429" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg></span>  Two collaborators per project</li>
                            <li><span><svg width="16" height="16" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 10.0857V11.0057C20.9988 13.1621 20.3005 15.2604 19.0093 16.9875C17.7182 18.7147 15.9033 19.9782 13.8354 20.5896C11.7674 21.201 9.55726 21.1276 7.53447 20.3803C5.51168 19.633 3.78465 18.2518 2.61096 16.4428C1.43727 14.6338 0.879791 12.4938 1.02168 10.342C1.16356 8.19029 1.99721 6.14205 3.39828 4.5028C4.79935 2.86354 6.69279 1.72111 8.79619 1.24587C10.8996 0.770634 13.1003 0.988061 15.07 1.86572" stroke="#091429" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M21 3.00574L11 13.0157L8 10.0157" stroke="#091429" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg></span>  One of each generatable document</li>
                        </ul>

                        <div class="price-button p-3">
                                <a href="#" class="btn btn-primary btn-block">Sign up for free</a>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="pricecol p-2 pt-4">
                            <p class="pricetext">Pro</p>
                            <div class="price">
                                    <h5 class="pricenumber">24.99<p>/mo</p></h5>
                                </div>
                                    
                            <ul class="pricelist pt-3">
                                    <p class="m-0" style="font-size: 12px">All Stater features and</p>
                                <li>
                                    <span><svg width="16" height="16" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21 10.0857V11.0057C20.9988 13.1621 20.3005 15.2604 19.0093 16.9875C17.7182 18.7147 15.9033 19.9782 13.8354 20.5896C11.7674 21.201 9.55726 21.1276 7.53447 20.3803C5.51168 19.633 3.78465 18.2518 2.61096 16.4428C1.43727 14.6338 0.879791 12.4938 1.02168 10.342C1.16356 8.19029 1.99721 6.14205 3.39828 4.5028C4.79935 2.86354 6.69279 1.72111 8.79619 1.24587C10.8996 0.770634 13.1003 0.988061 15.07 1.86572" stroke="#091429" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M21 3.00574L11 13.0157L8 10.0157" stroke="#091429" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg></span>Active projects</li>
                                <li><span><svg width="16" height="16" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21 10.0857V11.0057C20.9988 13.1621 20.3005 15.2604 19.0093 16.9875C17.7182 18.7147 15.9033 19.9782 13.8354 20.5896C11.7674 21.201 9.55726 21.1276 7.53447 20.3803C5.51168 19.633 3.78465 18.2518 2.61096 16.4428C1.43727 14.6338 0.879791 12.4938 1.02168 10.342C1.16356 8.19029 1.99721 6.14205 3.39828 4.5028C4.79935 2.86354 6.69279 1.72111 8.79619 1.24587C10.8996 0.770634 13.1003 0.988061 15.07 1.86572" stroke="#091429" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M21 3.00574L11 13.0157L8 10.0157" stroke="#091429" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg></span>  Three active projects</li>
                                <li><span><svg width="16" height="16" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21 10.0857V11.0057C20.9988 13.1621 20.3005 15.2604 19.0093 16.9875C17.7182 18.7147 15.9033 19.9782 13.8354 20.5896C11.7674 21.201 9.55726 21.1276 7.53447 20.3803C5.51168 19.633 3.78465 18.2518 2.61096 16.4428C1.43727 14.6338 0.879791 12.4938 1.02168 10.342C1.16356 8.19029 1.99721 6.14205 3.39828 4.5028C4.79935 2.86354 6.69279 1.72111 8.79619 1.24587C10.8996 0.770634 13.1003 0.988061 15.07 1.86572" stroke="#091429" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M21 3.00574L11 13.0157L8 10.0157" stroke="#091429" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg></span>  Two collaborators per project</li>
                                <li><span><svg width="16" height="16" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21 10.0857V11.0057C20.9988 13.1621 20.3005 15.2604 19.0093 16.9875C17.7182 18.7147 15.9033 19.9782 13.8354 20.5896C11.7674 21.201 9.55726 21.1276 7.53447 20.3803C5.51168 19.633 3.78465 18.2518 2.61096 16.4428C1.43727 14.6338 0.879791 12.4938 1.02168 10.342C1.16356 8.19029 1.99721 6.14205 3.39828 4.5028C4.79935 2.86354 6.69279 1.72111 8.79619 1.24587C10.8996 0.770634 13.1003 0.988061 15.07 1.86572" stroke="#091429" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M21 3.00574L11 13.0157L8 10.0157" stroke="#091429" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg></span>  One of each generatable document</li>
                            </ul>
    
                            <div class="price-button p-3">
                                    <a href="#" class="btn btn-primary btn-block">Sign up for free</a>
                            </div>
                        </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="pricecol p-2 pt-4">
                                <p class="pricetext">Pro Plus</p>
                                <div class="price">
                                    <h5 class="pricenumber">79.99<p>/mo</p></h5>
                                </div>
                                
        
                                <ul class="pricelist pt-3">
                                <p class="m-0" style="font-size: 12px">All Stater and Pro features and</p>

                                    <li>
                                        <span><svg width="16" height="16" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21 10.0857V11.0057C20.9988 13.1621 20.3005 15.2604 19.0093 16.9875C17.7182 18.7147 15.9033 19.9782 13.8354 20.5896C11.7674 21.201 9.55726 21.1276 7.53447 20.3803C5.51168 19.633 3.78465 18.2518 2.61096 16.4428C1.43727 14.6338 0.879791 12.4938 1.02168 10.342C1.16356 8.19029 1.99721 6.14205 3.39828 4.5028C4.79935 2.86354 6.69279 1.72111 8.79619 1.24587C10.8996 0.770634 13.1003 0.988061 15.07 1.86572" stroke="#091429" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M21 3.00574L11 13.0157L8 10.0157" stroke="#091429" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg></span>Active projects</li>
                                    <li><span><svg width="16" height="16" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21 10.0857V11.0057C20.9988 13.1621 20.3005 15.2604 19.0093 16.9875C17.7182 18.7147 15.9033 19.9782 13.8354 20.5896C11.7674 21.201 9.55726 21.1276 7.53447 20.3803C5.51168 19.633 3.78465 18.2518 2.61096 16.4428C1.43727 14.6338 0.879791 12.4938 1.02168 10.342C1.16356 8.19029 1.99721 6.14205 3.39828 4.5028C4.79935 2.86354 6.69279 1.72111 8.79619 1.24587C10.8996 0.770634 13.1003 0.988061 15.07 1.86572" stroke="#091429" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M21 3.00574L11 13.0157L8 10.0157" stroke="#091429" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg></span>  Three active projects</li>
                                    <li><span><svg width="16" height="16" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21 10.0857V11.0057C20.9988 13.1621 20.3005 15.2604 19.0093 16.9875C17.7182 18.7147 15.9033 19.9782 13.8354 20.5896C11.7674 21.201 9.55726 21.1276 7.53447 20.3803C5.51168 19.633 3.78465 18.2518 2.61096 16.4428C1.43727 14.6338 0.879791 12.4938 1.02168 10.342C1.16356 8.19029 1.99721 6.14205 3.39828 4.5028C4.79935 2.86354 6.69279 1.72111 8.79619 1.24587C10.8996 0.770634 13.1003 0.988061 15.07 1.86572" stroke="#091429" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M21 3.00574L11 13.0157L8 10.0157" stroke="#091429" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg></span>  Two collaborators per project</li>
                                    <li><span><svg width="16" height="16" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21 10.0857V11.0057C20.9988 13.1621 20.3005 15.2604 19.0093 16.9875C17.7182 18.7147 15.9033 19.9782 13.8354 20.5896C11.7674 21.201 9.55726 21.1276 7.53447 20.3803C5.51168 19.633 3.78465 18.2518 2.61096 16.4428C1.43727 14.6338 0.879791 12.4938 1.02168 10.342C1.16356 8.19029 1.99721 6.14205 3.39828 4.5028C4.79935 2.86354 6.69279 1.72111 8.79619 1.24587C10.8996 0.770634 13.1003 0.988061 15.07 1.86572" stroke="#091429" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M21 3.00574L11 13.0157L8 10.0157" stroke="#091429" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg></span>  One of each generatable document</li>
                                </ul>
        
                                <div class="price-button p-3">
                                        <a href="#" class="btn btn-primary btn-block">Sign up for free</a>
                                </div>
                            </div>
                            </div>
            
                </div>
            </div>
        </section>
        <article>
                <div class="enter-div">
                    <h4 id="enter-line">Enterprise ready tools</h4>
                    <h6>with dedicated support and quick and consistent deolverance of new features, you can trust your<br>
                    process in our able hands</h6>
                    <br>
                    <button type="button" class="btn" >Contact Sales</button>
                </div>
            </article>
            <footer>
                <div class="container">
                <div class="row">
                <div class="col-sm-2">
                    
                        <h6 id="lancer">Lan<span style="color: aqua">c</span>ers</span></h6>
                        <a href="#" class="link">Pricing</a>
                        <br>
                        <a href="#" class="link">Sign in</a>
                        <br>
                        <a href="#" class="link">Sign Up</a>
                    
        
                </div>
                <div class="col-sm-2">
                    
                        <h6 >Useful links</h6>
                        
                        <a href="#" class="link">Dashboard</a>
                        <br>
                        <a href="#" class="link">Projects</a>
                        <br>
                        <a href="#" class="link">Invoices</a>
                        <br>
                        <a href="#" class="link">Create a Project</a></a>
                    
                </div>
                <div class="col-sm-4">
                    
                        <h6>Reach us</h6>
                        <p> 52b Charity Lane, off Magboso Highway, Ikate,<br> London, Nigeria</p>                
                        <i class="fab fa-facebook-square fa-2x"></i>
                        <i class="fab fa-twitter-square fa-2x"></i>
                </div>
                <div class="col-sm-4" id="col4">
                        <h6>Stay up to date</h6>
                        <p>Get emails about our newest features and events <br> you can visit, we promise not to spam</p>
                        <input type="text" placeholder="Email Address" id="email-input">
                        <button id="btn-sub">Subscribe</button>
                </div>
                </div>
            </div>
            </footer>
        


       
    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
