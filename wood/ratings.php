<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="ratings.css">
        <title>Responsive Portfolio Website</title>
       
    
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    </head>

    <body>
    
        <div class="testi_section">
            <h2 class="heading">HERE ARE OUR CUSTOMER REVIEWS AND RATINGS.</h2>
            <p class="para">This our feedback and insights from customers about their experiences with a product, service, or business. 
              Reviews typically include written comments or testimonials, expressing customers' opinions, satisfaction levels, 
              and specific details about their interactions.</p>
            <div class="testi_container">

                <div class="testi_card">
                    <img src="image/p7.jpg" class="quote">
                    <p>"The furniture available on this website is exceptionally appealing! It's my go-to place for acquiring the essential items that enhance the aesthetics and comfort of my home. 
                      The extensive collection ensures I find precisely what I need to elevate my living space.order now on their website "</p>
                    <div class="test_person">
                        <div class="name_desig">
                            <h4>Uncle Brain</h4>
                            <div class="rating">
                              <span class="star">&#9733;</span>
                              <span class="star">&#9733;</span>
                              <span class="star">&#9733;</span>
                              <span class="star">&#9733;</span>
                              <span class="star">&#9733;</span>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="testi_card">
                    <img src="image/p2.jpg" class="quote">
                    <p>"The products offered here exude top-notch quality, with the chairs standing out for their remarkable durability. These items have been thoroughly proven and tested, ensuring a reliable and long-lasting investment. 
                      Explore a selection that combines excellence and resilience for your utmost satisfaction."</p>
                    <div class="test_person">
                        <div class="name_desig">
                            <h4>Bard Di</h4>
                            <div class="rating">
                              <span class="star">&#9733;</span>
                              <span class="star">&#9733;</span>
                              <span class="star">&#9733;</span>
                              <span class="star">&#9733;</span>
                              <span class="star">&#9733;</span>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="testi_card">
                    <img src="image/p3.jpg" class="quote">
                    <p>""Their commendable promptness in addressing customer inquiries not only enhances the overall satisfaction of the experience but also underscores their commitment to fostering positive interactions. Customers genuinely value the well-structured and expeditious communication channels established"</p>
                    <div class="test_person">
                        <div class="name_desig">
                            <h4>Lars Rock</h4>
                            <div class="rating">
                              <span class="star">&#9733;</span>
                              <span class="star">&#9733;</span>
                              <span class="star">&#9733;</span>
                              <span class="star">&#9733;</span>
                              <span class="star">&#9733;</span>
                          </div>
                          </div>
                        </div>
                    </div>
                    <div class="testi_card">
                        <img src="image/p4.jpg" class="quote">
                        <p>"Their prompt responsiveness to customer inquiries contributes to a highly satisfactory experience, as they appreciate the swift and efficient communication channels established to address their needs."</p>
                        <div class="test_person">
                        <div class="name_desig">
                        <h4>Fran Smith</h4>
                        <div class="rating">
                          <span class="star">&#9733;</span>
                          <span class="star">&#9733;</span>
                          <span class="star">&#9733;</span>
                          <span class="star">&#9733;</span>
                          <span class="star">&#9733;</span>
                      </div>
                              </div>
                            </div>
                        </div>
                        <div class="testi_card">
                        <img src="image/p5.jpg" class="quote">
                        <p>"Their meticulous attention to packaging quality ensures that the products are exceptionally well-protected during transit, assuring customers that the items received will be in pristine condition without any damage. thoughtful packaging adds an extra layer 
"</p>
                        <div class="test_person">
                        <div class="name_desig">
                         <h4>Kyle Irving</h4>
                         <div class="rating">
                          <span class="star">&#9733;</span>
                          <span class="star">&#9733;</span>
                          <span class="star">&#9733;</span>
                          <span class="star">&#9733;</span>
                          <span class="star">&#9733;</span>
                      </div>
                      </div>
                    </div>
                </div>
                <div class="testi_card">
                    <img src="image/p6.jpg" class="quote">
                    <p>"Their delivery service is impressively swift; in a mere span of 20 days from the time of placing the order, I received the table set. The efficiency in processing and dispatching my purchase underscores their commitment to a timely and expedited delivery experience."</p>
                    <div class="test_person">
                        <div class="name_desig">
                            <h4>Jhon Nassi</h4>
                            <div class="rating">
                              <span class="star">&#9733;</span>
                              <span class="star">&#9733;</span>
                              <span class="star">&#9733;</span>
                              <span class="star">&#9733;</span>
                              <span class="star">&#9733;</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<?php
} else {
    // User is not logged in, redirect to index.php
    header("Location: index.php");
    exit();
}
?>