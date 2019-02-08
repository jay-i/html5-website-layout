<?php
include('header.php');
?>
	
    <title>Contact</title>
<body>
	<form action="">
			<div class="container">
					<h2>Let's Hear From You!</h2>
                    <div class="form-input">
                        <label for="">Full Name</label>
                        <input type="text" data-input="cm"
                               name=""
                               class="input"
                               placeholder="e.g Uloko John"
                               id="" required>
                    </div>
                    <div class="form-input">
                        <label for="">Email</label>
                        <input type="email"
                               name=""
                               class="input"
                               placeholder="e.g johnuloko@gmail.com"
                               id="" required>
                    </div>
                    <div class="form-input">
                        <label for="">Message</label>
                        <textarea
                                name="message"
                                class="input"
                                id=""
                                placeholder="Your message"
                                cols="6"
                                rows="6" required>
						</textarea>
                    </div>
                    <br/>
                    <div class="form-input">
                        <button type="submit"
                                class="button green">Send Message</button>
                    </div>
                </form>
			</div>
</body>
</html>
	