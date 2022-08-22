<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use App\Models\DynamicPages;
use Illuminate\Database\Seeder;

class DynamicPagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $dynamicPages = [
            
            [
                'title' =>'privacy policy',
                'slug' => Str::slug('privacy policy'), 
                'description' => '<h3 style="text-align: center;"><i>                                          PRIVACY POLICY
                </i></h3><p><b><i>                This Privacy Policy clarifies the way in which www.arkaaconsultants.com collects, utilizes and discloses information gathered from direct and indirect visitors of Arkaa’s website.
                </i></b></p><h5>                
                                PRIVATE IDENTIFICATION INFORMATION
                </h5><p>                We collect private identification information forms in various ways such as people visiting our site, getting registered on the site, having subscribed to our newsletter, taking part in a survey, filling up a form, and regarding other activities, services, features or resources we make available on our website. Visitors of our website may be asked for their personal name, email address, address, landline number and cell number. The users can also look into our website anonymously in incognito mode. We will collect private identification data from our users only if they willingly give such information to our website. They can refuse at any point to provide personal information which may obstruct them from taking part in our site regarding activities.</p><h5>
                                
                                NON-PRIVATE IDENTIFICATION INFORMATION
                </h5><p>                We may collect some non-private identification information of our users whenever they come in contact with our website. Non-private identification information may include the name of the browser, the computer type and other technical data about users’ connection to our website, such as the type of operating system and the ISP they used including other information of same sort.
                </p><h5>                
                                WEB BROWSER COOKIES
                </h5><p>                Our website makes use of “cookies” to enhance user experience. Web browser places cookies of our users on their hard drive for the purpose of keeping record and at times to track the data about them. User can always choose their web browser to reject cookies, or to simply notify you when cookies are sent. If they do this, some parts of the website may not work properly.
                </p><h5>                
                                HOW WE USE COLLECTED INFORMATION</h5><p>                Arkaa will collect, store and process your private data world-wide amongst Arkaa’s employees and vendors for clearly defined purposes entailing;
                </p><p>                
                                Providing you with correct data, products or services that you request from us or which we believe would interest you in a way that is targeted and relevant.
                </p><ul><li>                To run a promotion campaign, contest, survey or other Site features.
                </li><li>                To notify you about changes in our products as well as services;
                </li><li>                To ensure that our website is presented in an effective manner for you and your computer.
                </li><li>                We may use information to understand how our users as a group use the services and resources given on our website.</li><li>
                                To give a personal touch to user’s experience for future use.
                </li></ul><p>                We may contact you for the above objectives by telephone call, email, SMS and other ways. We may use the email address in order to entertain their inquiries, questions, and other requests.
                </p><h5>                
                                HOW WE PROTECT YOUR INFORMATION
                </h5><p>                We adopt credible data collection, storage and analyzing practices and security steps to protect against the unauthentic access, change, disclosure or deletion of your personal information, username, password, transaction information as well as data stored on our website.
                </p><h5>                
                                CHANGES TO THIS PRIVACY POLICY</h5><p>
                                Arkaa Consultants has the right to update this privacy policy at any time. When we do, we will show the updated date at the bottom of the current page. We appreciate our users to keep checking this page for any changes to stay updated about how we are helping to protect the private information we collect. You acknowledge and agree the fact that it is your responsibility to keep revieing this privacy policy time to time and become alert of the changes.
                </p><h5>                
                                YOUR ACCEPTANCE OF THESE TERMS
                </h5><p>                By visiting and using this website, you imply your acceptance to this privacy policy. If you do not agree to the terms mentioned above in this policy, please do not use our website. Your continued use of the www.arkaaconsultants.com following the posting of changes to this policy will be seen as your acceptance of those changes.</p><h5>
                                
                                CONTACT US</h5><p>
                                Email: info@arkaaconsultants.com
                </p><p>                Ph: +92 3 1111 Arkaa (27522)
                                                        </p>',
                'status' => 1,
                'meta_title' => 'privacy policy',
                'meta_tag' => 'privacy policy',
                'meta_description' => 'privacy policy',

            ],

            [
                'title' =>'terms and conditions',
                'slug' => Str::slug('terms and conditions'), 
                'description' => 'TERMS & CONDITIONS
                Welcome to Arkaaconsultants.com and thank you for your interest in browsing through projects and properties on our website. We provide digital real estate information and advertising services platform dedicated to making access to the real-estate sector simple, convenient, and quick for our users. By using our website, services, network, applications, or accessing any content provided by the Arkaa Consultants Pvt Ltd, you agree to be bound by our Terms of Use, i.e., our standard terms and conditions and Privacy Policy set out below. For the Terms of Use, a ‘user’ is anyone who uses our services, including those users who use our services according to a contract for services. You, the user, understand and agree that:
                
                GENERAL DISCLAIMER
                checkAs an online portal, Arkaaconsultants.com cannot authenticate any content advertised at Arkaaconsultants.com.
                
                checkAt all times checking and verifying the authenticity of any property, or project is solely dependent on the user.
                
                checkProper due diligence is recommended to our customers in conducting a physical inspection of the properties before engaging in any kind of negotiations with any of our company’s agents or persons displaying property at our portal.
                
                checkWe do not take responsibility for any third-party advertiser displaying property at Arkaaconsultants.com.
                
                checkWe do not accept any responsibility for any external website for which links are displayed at Arkaaconsultants.com. By clicking on the link, you will navigate away from and exit Arkaaconsultants.com.
                
                checkThe account users are responsible for the security/confidentiality and accuracy of their accounts.
                
                checkPlease keep your personal information confidential and only provide Arkaaconsultants.com with the necessary and correct information concerning your account.
                
                checkViews expressed by users are their own.
                
                checkIf you do not agree to any of the terms of Use, please do not use our services.
                
                checkThe Terms of Use may be amended from time to time by Arkaaconsultants.com at its sole discretion without providing any notice to any user/party. Such amendments shall be effective immediately.
                
                checkIf you use Arkaaconsultants.com in a manner inconsistent with the Terms of Use, Arkaaconsultants.com may remove your advertisements and block / restrict your access to Arkaaconsultants.com.
                
                General Terms and Conditions
                checkArkaaconsultants.com is not intended to provide financial, investment, or real-estate advice.
                
                checkService may include advertisements.
                
                checkWe do not work as property agents unless you subscribe to our agent service.
                
                checkWe do not represent you or the other users looking for a property or advertising their property or properties at Arkaaconsultants.com and will not assist any party in the lease or sale/purchase of any property.
                
                checkArkaaconsultants.com is not responsible in any way for the outcome of any negotiations you may have with any actual or potential buyer/seller, lessor/lessee, landlord/tenant concerning any property advertised at Arkaaconsultants.com
                
                checkYou are obligated to abide by the laws of the Islamic Republic of Pakistan.
                
                checkYou will not copy and republish/advertise any content advertised at or produced by Arkaaconsultants.com.
                
                checkArkaaconsultants.com may assign or subcontract any or all of their rights and obligations hereunder or under any agreement with any user.
                
                checkUsers may not assign, novate, subcontract or transfer their rights or obligations hereunder or under any agreement(s) with Arkaaconsultants.com, without Arkaaconsultants.com’s prior written consent.
                
                Intellectual Property
                checkAll content at Arkaaconsultants.com, including our services, such as logos, pictures/images, video / audio clips, codified information, text, graphics, icons, images, and general data and data compilation, and software and applications is the property of the Arkaa Consultants Pvt Ltd or, in specified cases, of its users and content generators/suppliers and protected by copyright laws.
                
                Policy on Prohibited Use
                checkThe user will not use the services provided by Arkaaconsultants.com for any prohibited or illegal use.
                
                checkArkaaconsultants.com and its content is the registered intellectual property of the Arkaa Consultants Pvt Ltd and you will not carry out any activity that infringes the intellectual property rights of the Arkaa Consultants Pvt Ltd.
                
                checkUser will not reproduce, display, amend, modify, republish, distribute, display, advertise or otherwise provide access to, disassemble or decompile any part of our services, except as explicitly permitted by Arkaaconsultants.com.
                
                checkUser will not display, upload or advertise any property or information that infringes any third partys intellectual property.
                
                checkYou will make sure to protect officers, agents, and employees at Arkaaconsultants.com against any and all copyright infringement claims in the light of your actions.
                
                checkCustomers/users are advised not to misrepresent or impersonate another person or entity.
                
                checkIrrespective of the fact, whether you are a subscriber of a paid service, in case of prohibited use, your account and services will be suspended for an unlimited period at the discretion of Arkaaconsultants.com. As per the consequences, you will not be entitled to any repayment, resumption of services, or reimbursement.
                
                General Indemnification / Limitation of Liability
                checkNotwithstanding anything set out above, each user agrees to indemnify, defend and hold harmless Arkaaconsultants.com, its officers, agents, consultants, employees, directors, affiliates from and against any and all proceedings, claims, demands and damages (of any kind), liabilities, losses, and expenses (including legal fees) due to, or as a result of, any breach of the Terms of Use or violation of any user representation, warranty or covenant.
                
                checkArkaaconsultants.com will not be liable for any damages of any kind arising out of or relating to the use or the inability to use Arkaaconsultants.com its content or links.
                
                checkArkaaconsultants.com assumes no responsibility for any incorrect information or false information published by users at Arkaaconsultants.com.
                
                checkArkaaconsultants.com assumes no responsibility for any defect, deletion, omission, error, delay in operation or transmission, communication failure, theft or destruction, or unauthorized/illegal access to or alteration of users data/information. Moreover, Arkaaconsultants.com shall not be responsible for any problem or technical malfunction of its on-line-systems, servers or providers, computer equipment, or software.
                
                No Warranties
                checkArkaaconsultants.com, its officers, employees, or consultants provide no warranty as to its services or any information displayed at Arkaaconsultants.com.
                
                checkArkaaconsultants.com excludes all warranties, whether express or implied, statutory or otherwise.',
                'status' => 1,
                'meta_title' => 'terms and conditions',
                'meta_tag' => 'terms and conditions',
                'meta_description' => 'terms and conditions',

            ],

        ];
        foreach ($dynamicPages as $table) {
            DynamicPages::create($table);
        }
    }
}
