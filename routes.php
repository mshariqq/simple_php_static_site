<?php
/**
 * Routes Identify
 * Register the Route Here
 * 
 * REGISTER => URL
 *             VIEW FILE TO CALL
 * 
 * @package: SRQ Technologies
 * @author: SRQ Technologies > Shariqq
 */

 // homepage
if(getRoute("")){
    getHeader(
        "SRQ Technologies LLP  - IT Company from Karimnagar", 
        "SRQ Technologies is an IT Company situated in Karimnagar City in India. SRQ Technologies Provides IT Consultation, Software Solutions",
        "srq technologies, about srq technologies"
    );
    require __VIEWS__ . "homepage.php";
    getFooter();
}

// about
elseif(getRoute("about-us")){
    getHeader(
        "About SRQ Technologies LLP - Full Information", 
        "About SRQ Technologies, legal information, company information, employees, services, clients, history and more",
        "about srq technologies, smr technologies llp"
    );
    require __VIEWS__ . "about.php";
    getFooter();
}

// contact
elseif(getRoute("contact")){
    getHeader(
        "Contact & Support - SRQ Technologies LLP", 
        "Full contact information about srq technologies to contact the support team for your qnuiry",
        "contact srq technologies, srq technologies support"
    );
    require __VIEWS__ . "contact.php";
    getFooter();
}

// products & services
elseif(getRoute("services")){
    getHeader(
        "Products & Services - SRQ Technologies LLP", 
        "Shifting Brains, Shariqq, Web Development, Mobile App Development, Software Services for Business",
        "srq technologies products, srq technologies services"
    );
    require __VIEWS__ . "services.php";
    getFooter();
}

// disclaimer
elseif(getRoute("disclaimer")){
    getHeader(
        "Disclaimer - SRQ Technologies LLP", 
        'The about.shariqq.com Web Site (the "Site") is an online information service provided by SRQ Technologies ("about.shariqq.com "), subject to your compliance with the terms and conditions set forth below',
        "SRQ Technologies Disclaimer and policies"
    );
    require __VIEWS__ . "disclaimer.php";
    getFooter();
}

// poli ies
elseif(getRoute("policies")){
    getHeader(
        "Policies - SRQ Technologies LLP", 
        "SRQ Technologies LLP Website Polcies, We do not store any data of our user or customer",
        "SRQ Technologies policies"
    );
    require __VIEWS__ . "policies.php";
    getFooter();
}

// careers
elseif(getRoute("careers")){
    getHeader(
        "Careers at SRQ Technologies LLP", 
        'Work from home jobs & opportunities at srq technologies llp. Freshers are allowed to join without any experience as intern.',
        "srq technologies jobs, srq technologies careers, web development jobs, software jobs"
    );
    require __VIEWS__ . "careers.php";
    getFooter();
}

// internship
elseif(getRoute("internship")){
    getHeader(
        "Internship at SRQ Technologies LLP | Work from Home", 
        'Work from home Internship at srq technologies llp. Free Internship opportunity for freshers to gain experience.',
        "srq technologies internship, free internship, internship at srq technologies"
    );
    require __VIEWS__ . "internships.php";
    getFooter();
}

// 404 not found
else
{
    getHeader(
        "404 Not Found - SRQ Technologies", 
        'The page you are looking does not exist',
        "not found"
    );
    require __VIEWS__ . "404.php";
    getFooter();
}
