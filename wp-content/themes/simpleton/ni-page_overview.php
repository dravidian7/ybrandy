<?php
/**
 * Template Name: ni-overview
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Simpleton
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<div id="container" class="ni_section">
			<div id="content" role="main">
            	
					<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
						<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<div class="entry-content">
                            	<a name="ni_top"></a>
								<div id="ni_banner"></div>
								<? include "ni_nav.php"; ?>
                                <h1><? the_title() ?></h1>
                                <div id="overview_subs">
                                	<ul>
                                    	<li><a href="#why_target">Why Target New Immigrants?</a></li>
                                        <li><a href="#new_nature">New Nature For New Immigrants</a></li>
                                        <li><a href="#far_reach">Far-Reaching Consequences</a></li>
                                        <li><a href="#future">The Future Of Canada And Its Nature</a></li>
                                        <li><a href="#tech_nature">Technology vs Nature</a></li>
                                        <li><a href="#nature_city">Nature In The City</a></li>
                                        <li><a href="#healing">Healing</a></li>
                                        <li><a href="#mentors">Mentors &mdash; Teaching Other New Immigrants</a></li>
                                    </ul>
                              	</div>
                                <nav></nav>
								<?php the_content(); ?>
                                <div class="ni_content clearfix">
                                        <img src="<? bloginfo('template_url'); ?>/images/ni_do_1.jpg" class="ni_img_left" />
                                        <p>&nbsp;&nbsp;&nbsp;The documentary Nature&rsquo;s Invitation follows new immigrants as they explore Canada&rsquo;s national and provincial parks, as part of new outdoor wilderness programs developed by Parks Canada and Alberta Parks. It also shows new Canadians, as they get involved in nature programs in the Albertan cities of Edmonton and Calgary. The goal of these initiatives is to help newcomers become educated about the wilderness available to them in Canada by taking away barriers that stop them from exploring. These barriers include the cost of transportation, accommodation, park fees, fear and lack of knowledge. &ldquo;It is incredibly important that everybody gets out and learns about nature,&rdquo; says Robert Bateman, Canadian Wildlife Artist and Environmentalist. &ldquo;New immigrants if they want to really partake of Canada, devour Canada, become a bit more Canadian. I think that nature is absolutely a must.&rdquo;</p>
                                    	<p>The program&rsquo;s objective is to help new immigrants gain access to the social and health benefits of being in nature. &ldquo;It is a challenging endeavour to go to a new country and to begin a new life,&rdquo; explains James Bartram, the Education Director of The Palisades Stewardship Education Centre in Jasper National Park. &ldquo;So I think the mental and physical health benefits of taking some time to get out of the cities and come and visit some of these spectacular wilderness areas. It&rsquo;s a real opportunity for new Canadians to rejuvenate themselves and be sustained and feel a sense of pride and ownership.&rdquo;</p>
                                        <img src="<? bloginfo('template_url'); ?>/images/ni_do_2.jpg" class="ni_img_right" style="width:20%" />
                                    	<p>Another aim of these programs is to encourage new immigrants to think about getting jobs with Canada&rsquo;s national and provincial parks and to create future stewards of the land.</p>
                                    	
                                        <h2><a name="why_target" href="#ni_top">Why Target New Immigrants?</a></h2>
                                        <img src="<? bloginfo('template_url'); ?>/images/ni_do_3.jpg"  class="ni_img_left" style="width:17%" />
                                        <p>Immigration has always been a defining aspect of the Canadian landscape, and never more so than today. Despite being the least populous nation among the G8 countries at 33.5 million people, Canada now has the fastest growing population. Two thirds of the overall population growth in Canada is attributed to immigration, most of which comes from China, the Philippines and India. Many of these newcomers only experience Canada&rsquo;s natural splendour through television or photographs, and this, in the eyes of many presents a real issue. Visitor numbers to national parks are declining and new incentives are being offered to get new Canadians more in touch with the nature around them.</p>
                                        <p>&ldquo;New Canadians are accessing our parks and historic sites currently but not in significant numbers and especially not for multi-day uses,&rdquo; explains Alan Latourelle, the CEO Parks Canada. &ldquo;Our challenge is to work with these communities...how to get them out to our national parks and national historic sites?&rdquo;</p>
                                    
                                    	<h2><a name="new_nature" href="#ni_top">New Nature For New Immigrants</a></h2>
                                        <img src="<? bloginfo('template_url'); ?>/images/ni_do_4.jpg"  class="ni_img_left" />
                                        <p>There are movements by many different organizations to get immigrants in touch with Canada&rsquo;s nature. These include outdoor citizenship ceremonies that take place in national and provincial parks, and &ldquo;learn to camp&rdquo; programs offered by Parks Canada and Alberta Parks. There are also gardening programs for urban senior immigrants, and rafting trips on rivers located within the city. Many of these events are organized by resettlement agencies that have direct access to the new immigrants through their English as a Second Language programs. </p>
                                        <p>The Edmonton Mennonite Centre for Newcomers has been leading the way with these &ldquo;learn to camp programs&rdquo;. Judy Sillito, the Director of Language Services at EMCN explains, &ldquo;There&rsquo;s research and inquiry going on about what it means to connect to a new country. And we thought that connecting to the land would be one avenue into feeling at home in your new place.&rdquo;</p>
                                        <p>&ldquo;As a new Canadian myself I hear a lot about wildlife. You know camping and activities that other Canadians do and most of it involves outdoor activities, &ldquo; says Modjataba Nouri who immigrated from Afghanistan four years ago. &ldquo;So learning about the outdoor activities, wildlife and National Parks...it is important for me from two points of view: one is the fact that it could help me to relax a little bit and have some fun myself. Also probably teach my kids about things that I am learning now and they can enjoy it later themselves.&rdquo; </p>
                                        <img src="<? bloginfo('template_url'); ?>/images/ni_do_5.jpg"  class="ni_img_right" />
                                        <p>Robert Bateman, Canada&rsquo;s famous Wildlife Artist and Environmentalist agrees, &ldquo;I think Parks Canada taking out new Canadians to have adventures in nature is the best news that I&rsquo;ve heard maybe in years. It is so important, it&rsquo;s so, so key and it&rsquo;s so refreshing and so creative and I wish that it was like a pebble that had been dropped in a pool and the ripple effect would expand to all kinds of other organizations including schools and so on.&rdquo;</p>
                                        <img src="<? bloginfo('template_url'); ?>/images/ni_do_6.jpg"  class="ni_img_left" style="width:17%" />
                                    	
                                        <h2><a name="far_reach" href="#ni_top">Far-Reaching Consequences</a></h2>
                                        <p>Experts say these opportunities will not only benefit the newcomers but are also essential for the survival of Canada&rsquo;s parks and natural areas. According to Richard Louv, author of the books Last Child In The Woods and The Nature Principle, we are all less connected to nature and a lifestyle devoid of nature has high stakes for all Canadians. A phenomenon he identifies as &ldquo;Nature Deficit Disorder&rdquo;. &ldquo;It has profound implications for our relationship with nature, it has profound implications for our psychological health, for our physical health,&rdquo; explains Richard Louv. &ldquo;If this break between all of us and nature continues who will be the future stewards of the Earth? We will always have environmentalists, but increasingly environmentalists will carry nature in their briefcases, not in their hearts. That&rsquo;s a very different relationship. So whether it&rsquo;s immigrants or the rest of us, that disconnection from nature has to be confronted.&rdquo;</p>
                                        <img src="<? bloginfo('template_url'); ?>/images/ni_do_7.png" class="ni_img_right" />
                                        <h2><a href="#ni_top" name="future">The Future Of Canada And Its Nature</a></h2>
                                        <p>As new immigrants continue to play a huge role in the future of Canada their role in how the country cares and protects its nature is also in their hands. This is an issue that Robert Bateman cares deeply about. &ldquo;I think it is a wonderful thing that new Canadians do become involved in nature because as a matter of fact, I have quite a serious concern about voting patterns shifting because not only new Canadians but all young people ... are less and less going out into nature...There are all kinds of signs all over the place that are quite alarming. If this whole generation is turning its back on nature, what&rsquo;s that going to mean for future voting patterns?&rdquo; </p>
                                    	
                                        <h2><a name="tech_nature" href="#ni_top">Technology vs Nature</a></h2>
                                        <img src="<? bloginfo('template_url'); ?>/images/ni_do_9.png" class="ni_img_right" />
                                        <p>Richard Louv is also deeply concerned about how our fast paced technological society is pulling us away from being outdoors. &ldquo;Increasingly we live a virtual life, increasingly kids and adults live in front of screens whether they&rsquo;re little blackberries or computers or video games. I think that that limits human experience,&rdquo; says Richard Louv. &ldquo;The constant onslaught of electronic information, there&rsquo;s a downside to that. I mean studies connect it to depression, it has something to do with the rise in obesity, we need an antidote to that. I think that the more high-tech our culture becomes, the more nature we need. We need that balance, we need that antidote to the downside of technology.&rdquo;</p>
                                        
                                        <img src="<? bloginfo('template_url'); ?>/images/ni_do_8.png" class="ni_img_left" />
                                        <p>One new young immigrant who is more in touch with technology than nature is Sean. He is sixteen years old and moved with his family from the Philippines to Calgary a year and a half ago. &ldquo;I am an indoor person,&rdquo; explains Sean. &ldquo;I watch and play video games about two to three hours a day.&rdquo; After spending a week with others on an Outward Bound camping trip organized by Waterton Lakes National Park, he feels the benefits of being in nature. &ldquo;Before we came into this trip we never really had the chance to go into nature, it felt great, it was amazing, you don&rsquo;t get to see this kind of scenery that much,&rdquo; says Sean. &ldquo;I would love to go and do this with my family, my brothers and show them where I&rsquo;ve been, and show them what I&rsquo;ve learned.&rdquo; </p>
                                    	
                                        <h2><a name="nature_city" href="#ni_top">Nature In The City</a></h2>
                                        <img src="<? bloginfo('template_url'); ?>/images/ni_do_10.jpg" class="ni_img_right" />
                                        <p>Most new immigrants move to urban areas, and their main focus is getting a job to provide for their families, so seeking out nature and leisure activities are not a priority. And with the challenges of transportation, free time and money, it isn&rsquo;t always easy for new immigrants to travel long distances to get to national or provincial parks. But according to experts like Richard Louv, getting out into nature that is close by to one&rsquo;s home is just as important for newcomers. &ldquo;I actually think that nearby nature is every bit as important to the human experience as wilderness is. Maybe more important, because that&rsquo;s where we live, work, learn and play. As of 2008, more people in the world live in urban environments than live in the countryside. That&rsquo;s a first. That&rsquo;s a demarcation line in human experience that we haven&rsquo;t experienced before.&rdquo;</p>
                                        <img src="<? bloginfo('template_url'); ?>/images/ni_do_11.jpg" class="ni_img_right" />
                                        <p>Kazi Hossain moved from Bangladesh to Edmonton four years ago. He works in Agro-forestry. He and his wife, Shamima signed up to explore Edmonton&rsquo;s North Saskatchewan river on a day trip set up by the resettlement agency, Edmonton Immigrant Services Association and River Watch. The group tested the health of the water and that experience had a profound effect on Kazi. &ldquo;I am from Dhaka, the capital of Bangladesh, that city is built on the bank of Buriganga. And you can see, this river is so much polluted now. People cannot drink because all the industries drained into the river. If people go and swim in that river, they will get blisters, you know, like skin diseases. Coming from that country, coming here, in Canada, I totally got a different perspective, that people respect the nature. People do care about where they&rsquo;re living, people do care about the environment. Through this program today, we got that appreciation, you know, this is your environment, this is your ecosystem and this is your water. So you have to have the respect, and you do your part, what it takes to keep your water clean, keep your environment clean and keep your neighbours happy.&rdquo;
</p>
                                    	
                                        <h2><a name="healing" href="#ni_top">Healing</a></h2>
                                        <img src="<? bloginfo('template_url'); ?>/images/ni_do_12.jpg" class="ni_img_left" />
                                        <p>Many immigrants, especially seniors, feel isolated in the new country they have moved to. The Calgary Immigrant Women&rsquo;s Association is trying to change that. At Calgary Rotary Challenger Park they organize horticultural therapy for them by getting them involved in planting and taking care of community gardens. Mani Korha, a coordinator from the Seniors One-on-One Counselling Program at CIWA, has helped organize the outings. &ldquo;We want to bring out our senior immigrants into the community,&rdquo; she explains. &ldquo;Because in their homelands, they&rsquo;re very social. And so when they come to Canada, they&rsquo;re very isolated and they stay within the house and they&rsquo;re scared to travel, and so this is a good way to get them out into the community.&rdquo;</p>
                                        <p>The program goes deeper than just growing food or meeting new friends it also helps many of them heal. &ldquo;It is something they&rsquo;re creating. They are putting something in the soil, and growing stuff, and they see, ... &lsquo;ok, we can do the same thing with life too. If I put the seed, if I nurture them, then it will grow&rsquo;, so they&rsquo;re learning about life also from the garden,&rdquo; says Mojnura Khan, a Senior Immigrant Women Counsellor at CIWA. </p>
                                        <p>The experience has been rewarding for many of them like Veena Bagai. She moved from India two years ago; &ldquo;I love nature. I just want to talk to nature, it just gives me really peace of mind.&rdquo; And it isn&rsquo;t just the new immigrants who are learning. &ldquo;They will look at a food and let&rsquo;s say cabbage or cilantro or even some of the weeds and they&rsquo;ll tell me in my home country we do it this way and when I&rsquo;m weeding they&rsquo;ll say, don&rsquo;t weed that because in my home country we put that in our salads,&rdquo; explains Mary Anne Robeson, the Horticultural Therapist. &ldquo;So I come away learning about their culture, their language, how to use the foods.&rdquo; </p>
                                    	<img src="<? bloginfo('template_url'); ?>/images/ni_do_13.jpg" class="ni_img_right" />
                                        <p>The mental health benefits of going out into nature have started to make an impact on many of the new immigrants who have participated in these programs. &ldquo;I think the camping life might be very, very important for working people because we have so much stress life right and we want to find a way to recover, to recharge ourselves,&rdquo; explains Jian Feeng Wang (Rocky), who moved from China six years ago. &ldquo;So in China we have our own lifestyle. We know how to cope with the stress life. Here we still try to find a way to do that.&rdquo;</p>
                                        <p>Being with nature, and connecting to the land is also helping Nahla Yagoub and her family. They immigrated from Sudan four months ago and are now living in Calgary. Although her five children speak to their family members back home, on Skype often, they are missing Sudan a lot. To keep their minds off how homesick they are the family is getting involved in as many outdoor experiences as possible. They have gone camping and have tried fishing at the provincial parks in Kananaskis country, which is about an hour&rsquo;s drive from their house. &ldquo;We have fun when we go outside of house and we feel good,&rdquo; says Nahla. &ldquo;When we are at home we usually think about our country, and our families at our country and we feel a bit homesickness and so when we get outside we think of Canada and we saw the Canadian so we fix thinking on Canada and it is okay for us.&rdquo;
</p>
									<p>These nature programs for new Canadians have also had a positive experience for Yun Qiu Yu (Cathy), a new immigrant who moved to Canada from China two years ago. She describes how nature has helped her get through the stress of moving to a new country and all the challenges that brings. &ldquo;So, even now, sometimes I miss my family, but I&rsquo;m not regret,&rdquo; she says. &ldquo;The best moment, my answer is so solid, when I was camping, and I was standing in the forest, and feel the fresh air, beautiful mountains, I told myself, Oh, my choice is right. I should be here. It&rsquo;s so wonderful. If I didn&rsquo;t make that choice, how can I experience those wonderful views in this world? Just like you open the third eyes to see the different things.&rdquo;</p>
                                    	<img src="<? bloginfo('template_url'); ?>/images/ni_do_14.jpg" class="ni_img_left" style="width:17%" />
                                    	<h2><a name="mentors" href="#ni_top">Mentors&mdash;Teaching Other New Immigrants</a></h2>
                                        <p>Cathy is now working at the resettlement agency, The Calgary Catholic Immigration Society, which gave her the chance to go on her first camping trip. Now she helps to organize these trips for other newcomers. &ldquo;I love this program because I know for newcomers, the first year, even the first three years, is not easy, a lot of stress. And there&rsquo;s a chance you can just experience the nature, camping, and see animals, wildlife, and a lot of people are volunteering for you. For newcomers it&rsquo;s really precious.&rdquo; </p>
<p>Nature will continue to be a collective place that all newcomers can take solace in, no matter where they&rsquo;ve come from or where life has taken them. </p>
                                </div>
								<?php edit_post_link( __( 'Edit', 'simpleton' ), '<span class="edit-link">', '</span>' ); ?>
								<? include "ni_footer.php"; ?>
							</div><!-- .entry-content -->
						</div><!-- #post-## -->
					<?php endwhile; ?>
				</div><!--contentleft-->
				
			</div><!-- #content -->
		</div><!-- #container -->

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
