<?php
/**
 * Template Name: ni-subjects
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

		<div id="container"  class="ni_section">
			<div id="content" role="main">
            	
					<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
						<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<div class="entry-content">
								<div id="ni_banner"></div>
								<? include "ni_nav.php"; ?>
                                <h1><? the_title() ?></h1>
								<?php the_content(); ?>
                                <div class="ni_content">
                                	<div class="ni_profile_row clearfix">
                                        <div class="ni_colhalf">
                                            <div class="ni_subject_img"><img src="<? bloginfo('template_url'); ?>/images/ni_prof_1.jpg"/></div>
                                            <div class="ni_subject_name">Yun Qiu Yu (Cathy)</div>
                                            <div class="ni_subject_title">New Immigrant from China <br />(2 years)</div>
                                                <div class="ni_subject_quote">&ldquo;I love this program because I know for newcomers, the first year, even the first three years, is not easy. A lot of stress. And there&rsquo;s a chance you can just experience the nature.&rdquo;</div>
                                            <div class="ni_subject_desc" style="padding-right:40px">Yun Qiu Yu (Cathy) moved from China to Calgary two years ago. She comes from a big oil and gas city in northeast China called Daqing. Moving to Canada was not a necessity for Cathy, she had a good job as a manager at an oil and gas company there, but she wanted a change. &ldquo;I like to experience an adventure life to fulfil the meaningful life, so that&rsquo;s why I came here,&rdquo; explains Cathy. &ldquo;For me it&rsquo;s a big challenge, but I enjoy the process.&rdquo; Participating in these new nature programs for immigrants have had a profound impact on Cathy&rsquo;s life. &ldquo;When I stand in that forest I can totally forget anything and just experience the nature spirit. At that moment I feel so peaceful and so beautiful. Nature, that&rsquo;s amazing.&rdquo; Cathy is now helping to organize these outdoor wilderness trips for other newcomers through her job at the Calgary Catholic Immigration Society (CCIS). 	</div>
                                        </div>
                                        <!--/profile-->
                                        <div class="ni_colhalf ni_col_last">
                                            <div class="ni_subject_img"><img src="<? bloginfo('template_url'); ?>/images/ni_prof_2.jpg"/></div>
                                            <div class="ni_subject_name"> Aballa Salman</div>
                                            <div class="ni_subject_title">New immigrant from Sudan <br />(4 months)</div>
                                            <div class="ni_subject_quote">&ldquo;I have no any experience about camping. I don&rsquo;t think that in my country there is camping there."</div>
                                            <div class="ni_subject_desc" style="padding-right:40px">Aballa and his wife, Nahla Yagoub, and their five children moved to Calgary four months ago. &ldquo;We moved here to provide a good education for our kids. We think that Canada is a peaceful place and a secure place.&rdquo; The family has never tried camping before and were chosen to go to Kootenay National Park in British Columbia with the Calgary Catholic Immigration Society. &ldquo;I have no any experience about camping. I don&rsquo;t think that in my country there is camping there. People do not do that but I think it is one of the culture of the Canadian to camp outside. Something very new for us.&rdquo;</div>
                                        </div>
                                        <!--/profile-->
                              		</div>   
                                    <div class="ni_profile_row clearfix">       
                                        <div class="ni_3_col1">
                                            <div class="ni_subject_img"><img src="<? bloginfo('template_url'); ?>/images/ni_prof_3.jpg"/></div>
                                            <div class="ni_subject_name"> Nahom Araya </div>
                                            <div class="ni_subject_title">New immigrant from Eritrea, Africa <br />(3 months)</div>
                                            <div class="ni_subject_quote">&ldquo;As a new Canadian I want to know about my new country. It&rsquo;s an amazing place. A beautiful place.&rdquo; </div> 
                                            <div class="ni_subject_desc">Nahom has been living in Canada for only three months. He had a chance to go camping for the first time in Jasper National Park with the &ldquo;Learn to Camp&rdquo; program. The experience reminded him of his life back in Eritrea, &ldquo;I used to sleep in tents, out like this, as a soldier in national service. It&rsquo;s very common to sleep under trees, at the bottom of mountains and I love it so much.&rdquo;</div>
                                        </div>
                                        <!--/profile-->
                                        <div class="ni_3_col1">
                                            <div class="ni_subject_img"><img src="<? bloginfo('template_url'); ?>/images/ni_prof_4.jpg"/></div>
                                            <div class="ni_subject_name"> Modjataba Nouri</div>
                                            <div class="ni_subject_title">New immigrant from Afghanistan <br />(4 years)</div>
                                            <div class="ni_subject_quote">&ldquo;It&rsquo;s part of our life in Canada, it&rsquo;s part of our identity.&rdquo; </div>
                                            <div class="ni_subject_desc">Canada with his wife and daughter four years ago. His family participated in the &ldquo;Learn to Camp&rdquo; program at Jasper National Park. He is thrilled to have the chance to learn about nature in his new home. &ldquo;It&rsquo;s part of our life in Canada, it&rsquo;s part of our identity.&rdquo; 
    In Jasper, Modjataba enjoyed trying rock climbing &ldquo;I&rsquo;ve been going up the hills and mountains back home but not exactly like this. There are people that go up the mountains, there are even shepherds that go up the mountains. Obviously they don&rsquo;t go on the cliff but they go high up. I&rsquo;ve never seen mountain climbing with ropes.&rdquo; During the &ldquo;Learn to Camp&rdquo; program Modjataba felt the benefits of camping and being out in nature. 
    &ldquo;It could help me to relax a little bit and have some fun myself. Also probably teach my kids about the things that I am learning now and they can enjoy it later themselves.&rdquo; </div>
                                        </div>
                                        <!--/profile-->
                                        <div class="ni_3_col1 ni_col_last">
                                            <div class="ni_subject_img"><img src="<? bloginfo('template_url'); ?>/images/ni_prof_5.jpg"/></div>
                                            <div class="ni_subject_name"> Alan Latourelle </div>
                                            <div class="ni_subject_title">CEO Parks Canada</div>
                                            <div class="ni_subject_quote">&ldquo;New Canadians are accessing our parks... but not in significant numbers&rdquo;</div>
                                            <div class="ni_subject_desc">Alan is concerned because &ldquo;new Canadians are accessing our parks and historic sites currently but not in significant numbers and especially not for multi-day uses.&rdquo; Alan believes that spending time in Canada&rsquo;s national parks is essential for these newcomers. &ldquo;It is really a right of passage to a certain extent and it is their national parks, their national historic sites so for us at Parks Canada it&rsquo;s a great opportunity but also a challenge to really provide them that opportunity so they develop the sense of connection, the sense of pride in this great country of ours to our national parks and national historic sites.&rdquo; </div>
                                        </div>
                                        <!--/profile-->
                                 	</div>
                                    <!--/ni_profile_row-->
                                    <div class="ni_profile_row clearfix">
                                         <div class="ni_3_col1">
                                            <div class="ni_subject_img"><img src="<? bloginfo('template_url'); ?>/images/ni_prof_6.jpg"/></div>
                                            <div class="ni_subject_name"> Richard Louv </div>
                                            <div class="ni_subject_title">Author of <em>Last Child In The Woods</em> and <em>The Nature Principle</em></div>
                                           <div class="ni_subject_quote">&ldquo;I think that the more high-tech our culture becomes, the more nature we need.&rdquo; </div>
                                            <div class="ni_subject_desc">Author Richard Louv is concerned because our society is &ldquo;less and less connected to nature&rdquo;. He believes there are consequences for this type of living and that humans can develop &ldquo;nature deficit disorder&rdquo;. He believes a lifestyle devoid of nature &ldquo;has profound implications for our relationship with nature, it has profound implications for our psychological health, for our physical health.&rdquo; Richard is also concerned about technology pulling us away from living a life connected to nature. &ldquo;Increasingly kids and adults live in front of screens, whether they&rsquo;re little blackberries or computers or video games...I think that that limits human experience. I think that the more high-tech our culture becomes, the more nature we need. We need that balance, we need that antidote to the downside of technology.&rdquo;</div>
                                        </div>
                                        <!--/profile-->
                                        <div class="ni_3_col1">
                                            <div class="ni_subject_img"><img src="<? bloginfo('template_url'); ?>/images/ni_prof_7.jpg"/></div>
                                            <div class="ni_subject_name"> Judy Sillito</div>
                                            <div class="ni_subject_title">Director, Language Services, Edmonton Mennonite Centre for Newcomers</div>
                                            <div class="ni_subject_quote">&ldquo;The connection to the land is a place that is harder than other places for newcomers to connect to because of distance, money, travel, knowledge.&rdquo;</div>
                                            <div class="ni_subject_desc">Judy Sillito has been involved with the &ldquo;Learn to Camp&rdquo; pilot programs for the last few years. Judy says &ldquo;there&rsquo;s research and inquiry going on about what it means to connect to a new country and we thought that connecting to the land would be one avenue into feeling at home in your new place.&rdquo; The &ldquo;Learn to Camp&rdquo; programs have been so successful at the EMCN that the centre has had to turn away one hundred and fifty people who wanted to come due to overwhelming demand. </div>
                                        </div>
                                        <!--/profile-->
                                        <div class="ni_3_col1 ni_col_last">
                                            <div class="ni_subject_img"> <img src="<? bloginfo('template_url'); ?>/images/ni_prof_8.jpg"/></div>
                                            <div class="ni_subject_name"> Zorayda Rincon </div>
                                            <div class="ni_subject_title">New immigrant from Colombia <br />(4 years)</div>
                                            <div class="ni_subject_quote">&ldquo;I&rsquo;ve wanted to go camping because I want to know more about Canada&rdquo;</div>
                                            <div class="ni_subject_desc">Zorayda moved to Canada four years ago with her three children and settled in Calgary. In the documentary Zorayda explains why she had to come to Canada after her husband was murdered in Colombia nine years ago by the United Self-Defence Forces of Colombia. &ldquo;In order to be protected you have to pay them money and they were late on the payment and were killed. And I was scared for my life and my children&rsquo;s life and for my family&rsquo;s life.&rdquo; Now Zorayda and her family live in Edmonton. She goes to ESL classes at the EMCN and works as a cook and cleaner for twenty-four construction workers that live in the same house that she lives in with her children. Zorayda was chosen to go camping in Jasper National Park with the EMCN group. She says she never tried camping in Colombia and really wants to go with her daughter and the group. &ldquo;I&rsquo;ve wanted to go camping because I want to know more about Canada, experience more about what Canada is. I&rsquo;ve never done it before and I want to know what it feels like to sleep outside a house and I want to know what people eat, what they see.&rdquo;</div>
                                        </div>
                                        <!--/profile-->
                                 	</div>
                                    <!--/ni_profile_row-->
                                    <div class="ni_profile_row clearfix">
                                         <div class="ni_3_col1">
                                            <div class="ni_subject_img"><img src="<? bloginfo('template_url'); ?>/images/ni_prof_9.jpg"/></div>
                                            <div class="ni_subject_name"> Angie Acosta Rincon </div>
                                            <div class="ni_subject_title">New immigrant from Colombia <br />(4 years)</div>
                                            <div class="ni_subject_quote">&ldquo;We are busy, always busy. Me in the school, my brothers working and my Mom is in the kitchen. So we don&rsquo;t have time. And we just stay home, do my homework, just that.&rdquo; </div>
                                            <div class="ni_subject_desc">Angie is Zoryada&rsquo;s sixteen year old daughter. She has had a traumatic childhood seeing her father murdered in Colombia. &ldquo;I see my Dad dead on the floor. I remember that. My uncle, I see many blood. My grandma cry, cry, cry and my Mom too. It&rsquo;s very sad because I need my Dad. I can&rsquo;t forget it because it&rsquo;s hard to forget.&rdquo;
    Angie says her mom is always busy working or going to school so it will be nice to spend some time alone with her camping. &ldquo;I am excited to go camping because my Mom is with me... I&rsquo;m so happy.&rdquo; </div>
                                        </div>
                                        <!--/profile-->
                                        <div class="ni_3_col1">
                                            <div class="ni_subject_img"><img src="<? bloginfo('template_url'); ?>/images/ni_prof_10.jpg"/></div>
                                            <div class="ni_subject_name"> Robert Bateman </div>
                                            <div class="ni_subject_title">Canadian Wildlife Artist and Environmentalist</div>
                                            <div class="ni_subject_quote">&ldquo;If you simply spend a significant amount of your time out in nature that would translate directly into money for health bills going down.&rdquo;</div>
                                            <div class="ni_subject_desc">Robert Bateman, the Canadian wildlife artist and environmentalist, believes that &ldquo;it is incredibly important that everybody gets out and learns about nature but particularly new immigrants if they want to really partake of Canada, devour Canada, become a bit more Canadian.&rdquo; Bateman feels very strongly about the positive effect nature has on the health of society. He explains how recent research about those who spend time in nature have &ldquo;less obesity... less depression, less suicide, less drug abuse, less alcohol abuse, and less attention deficit disorder.&rdquo; Robert Bateman says he is worried about how &ldquo;the majority of young people are less and less going out into nature. Whether they&rsquo;re sixth generation Canadians or not, they&rsquo;re getting more and more engaged with electronics and hand held devices and that kind of thing and parks visitations by young people is falling. There are all kinds of signs all over the place that are quite alarming. If this whole generation is turning its back on nature, what&rsquo;s that going to mean for future voting patterns?&rdquo;</div>
                                        </div>
                                        <!--/profile-->
                                        <div class="ni_3_col1 ni_col_last">
                                            <div class="ni_subject_img"> <img src="<? bloginfo('template_url'); ?>/images/ni_prof_11.jpg"/></div>
                                            <div class="ni_subject_name"> Alisson Ogle </div>
                                            <div class="ni_subject_title">Manager, The Palisades Stewardship Education Centre</div>
                                            <div class="ni_subject_quote">&ldquo;Some people might have bad associations with tents. Where they come from tents may have been part of a refugee camp.&rdquo; </div>
                                            <div class="ni_subject_desc">Alisson runs the Palisades Stewardship Education Centre in Jasper where the new immigrants from the EMCN will be learning skills about how to safely enjoy the wilderness around them. The newcomers will also spend a night at the Palisades Centre before they have their first overnight camping experience in a tent. &ldquo;Some people might have bad associations with tents,&rdquo; explains Alisson. &ldquo;Where they come from tents may have been part of a refugee camp or something that has negative associations. So starting here, starting slowly helps them get comfortable and then when we transition it to the tent its more about the nature and we hope to create a really positive experience without putting anybody anywhere they are uncomfortable.&rdquo;</div>
                                        </div>
                                        <!--/profile-->
                                 	</div>
                                    <!--/ni_profile_row-->
                                    <div class="ni_profile_row clearfix">
                                         <div class="ni_3_col1">
                                            <div class="ni_subject_img"><img src="<? bloginfo('template_url'); ?>/images/ni_prof_12.jpg"/></div>
                                            <div class="ni_subject_name"> Jian Feeng Wang (Rocky) </div>
                                            <div class="ni_subject_title">New immigrant from China <br />(6 years)</div>
                                            <div class="ni_subject_quote">&ldquo;It is really worth it to have this kind of experience, especially for newcomers. They had a different life so this new Canadian life we are living in this country for sure they know what is the life here. And they can enjoy the nature.&rdquo; </div>
                                            <div class="ni_subject_desc">Rocky and his wife are part of the group that go camping in Jasper National Park with the others from the EMCN. Rocky really enjoys trying rock climbing in Jasper. &ldquo;I used to be a geologist. I climb many mountain climbing but it is not rock climbing. So this time I found that it is not so easy.&rdquo; Rocky and his wife enjoy camping and he sees how doing it may improve his quality of life. &ldquo;I think the camping life might be very very important for working people. Because we have so much stress [in] life right? And we want to find a way to recover, to recharge ourselves. So in China we have our own lifestyle. We know how to cope with the stress life but here we still try to find a way to do that.&rdquo; </div>
                                        </div>
                                        <!--/profile-->
                                        <div class="ni_3_col1">
                                            <div class="ni_subject_img"><img src="<? bloginfo('template_url'); ?>/images/ni_prof_13.jpg"/></div>
                                            <div class="ni_subject_name"> Xiong Wang (Steve) </div>
                                            <div class="ni_subject_title">New immigrant from China <br />(2 years)
    </div>
                                            <div class="ni_subject_quote">&ldquo;It is a very good opportunity for us to know more about Canadian geography, history and the culture.&rdquo;</div>
                                            <div class="ni_subject_desc">The camping trip in Jasper National Park with the EMCN was Steve&rsquo;s first camping trip. Steve and his wife and son had a great time learning about camping together. &ldquo;It is a very good opportunity for us to know more about Canadian geography, history and the culture. In a team, go out together, we are united together as a team. A lot of fun here. It&rsquo;s good.&rdquo; </div>
                                        </div>
                                        <!--/profile-->
                                        <div class="ni_3_col1 ni_col_last">
                                            <div class="ni_subject_img"> <img src="<? bloginfo('template_url'); ?>/images/ni_prof_14.jpg"/></div>
                                            <div class="ni_subject_name"> Jesus Orellanan </div>
                                            <div class="ni_subject_title">New immigrant from El Salvador <br />(4 years)</div>
                                            <div class="ni_subject_quote">&ldquo;I am learning about camping. It&rsquo;s a good experience to do...We will try it again.&rdquo;</div>
                                            <div class="ni_subject_desc">Jesus and his family enjoy the freedom they experience out in nature while camping compared to the tight and restricted lifestyle they have living in the city in Edmonton. &ldquo;In my country we can running everywhere so we have a lot of space to do but in Canada we have to respect many rules,&rdquo; says Jesus. &ldquo;We are living in an apartment, they can&rsquo;t run inside the apartment and this is a good opportunity for them to be running everywhere.&rdquo; 
    </div>
                                        </div>
                                        <!--/profile-->
                                  	</div>
                                    <!--/ni_profile_row-->
                                    <div class="ni_profile_row clearfix">
                                         <div class="ni_3_col1">
                                            <div class="ni_subject_img"><img src="<? bloginfo('template_url'); ?>/images/ni_prof_15.jpg"/></div>
                                            <div class="ni_subject_name"> James Bartram </div>
                                            <div class="ni_subject_title">Education Director, The Palisades Stewardship Education Centre</div>
                                            <div class="ni_subject_quote">&ldquo;I think its a real opportunity for new Canadians to rejuvenate themselves and be sustained and feel a sense of pride and ownership.&rdquo; </div>
                                            <div class="ni_subject_desc">James Bartram works for Parks Canada in Jasper National Park. He explains why being outdoors and camping is good for these new immigrants. &ldquo;For the last thousands of years people have come to this place to hunt and gather historically. They have come to this place to celebrate, they&rsquo;ve come to be rejuvenated mentally and spiritually. And so I think that some of these places have an emotional effect on all of us. And in particular it is a challenging endeavour to go to a new country and to begin a new life so I think the mental and physical health benefits of taking some time to get out of the cities and come and visit some of these spectacular wilderness areas, I think its a real opportunity for new Canadians to rejuvenate themselves and be sustained and feel a sense of pride and ownership.&rdquo; </div>
                                        </div>
                                        <!--/profile-->
                                        <div class="ni_3_col1">
                                            <div class="ni_subject_img"><img src="<? bloginfo('template_url'); ?>/images/ni_prof_16.jpg"/></div>
                                            <div class="ni_subject_name"> Sean Nardella </div>
                                            <div class="ni_subject_title">Visitor Experience Promotions, <br />Jasper National Park</div>
                                            <div class="ni_subject_quote">&ldquo;It shows you too how sensitive this place is it really establishes how special and fragile it is too.&rdquo;
    </div>
                                            <div class="ni_subject_desc">Sean Nardella works for Parks Canada in Jasper National Park and was very keen on having the new Canadian&rsquo;s visit the Columbia Icefield Glacier. &ldquo;It&rsquo;s something you don&rsquo;t get to see anywhere else. It&rsquo;s really a quintessentially Jasper thing. It&rsquo;s a glacier you can drive to, get out of your car, hop on a little bus and two minutes later your on a glacier where the ice is taller than the Eiffel tower in some places. It&rsquo;s amazing. And it shows you too how sensitive this place is it really establishes how special and fragile it is too and if you can go out there an appreciate something like that and put it in the context of something that&rsquo;s been around for a long time but it might not be around forever. It sort of gives you a whole new appreciation of this place and what its about.&rdquo;
    </div>
                                        </div>
                                        <!--/profile-->
                                        <div class="ni_3_col1 ni_col_last">
                                            <div class="ni_subject_img"> <img src="<? bloginfo('template_url'); ?>/images/ni_prof_17.jpg"/></div>
                                            <div class="ni_subject_name"> Nahla Yagoub 
    </div>
                                            <div class="ni_subject_title"> New immigrant from Sudan, Africa <br />(4 months)</div>
                                            <div class="ni_subject_quote">&ldquo;The way of fishing is interesting to me.&rdquo;</div>
                                            <div class="ni_subject_desc">Nahla and her husband Aballa Salman are trying to keep their five children&rsquo;s minds occupied so that they are not so homesick for Sudan. They have been going out to events in provincial parks in Kananaskis country, about an hour&rsquo;s drive from their house. &ldquo;We have fun when we go outside of house and we feel good because when we are at home we usually think about our country, and our families at our country and we feel a bit homesickness.&rdquo; Nahla really enjoyed fishing when she tried it in the provincial park. &ldquo;The way of fishing is interesting to me because I am sitting near a river and water and it is natural,&rdquo; says Nahla. &ldquo;I know how to use this equipment. It is good practice to me and I hope to have my own equipment and come another time to catch a fish, really, to catch a real catching.&rdquo; 
    </div>
                                        </div>
                                        <!--/profile-->
                                   	</div>
                                    <!--/ni_profile_row-->
                                    <div class="ni_profile_row clearfix">
                                        
                                         <div class="ni_3_col1">
                                            <div class="ni_subject_img"><img src="<? bloginfo('template_url'); ?>/images/ni_prof_18.jpg"/></div>
                                            <div class="ni_subject_name"> Sean Tucay </div>
                                            <div class="ni_subject_title">New immigrant from the Philippines <br />(1 year)</div>
                                            <div class="ni_subject_quote">&ldquo;Before we came into this trip we never really had the chance to go into nature.&rdquo;</div>
                                            <div class="ni_subject_desc">Sean recently moved one year ago from the Philippines to Calgary with his parents and two brothers. 
    &ldquo;We moved here because my parents wanted me to have a better education and have a better future for me and my brothers.&rdquo; Sean spends a lot of his time in front of the TV and not outdoors. &ldquo;I am an indoor person,&rdquo; says Sean. &ldquo;I watch and play video games about two to three hours a day.&rdquo; Sean joined a group of new immigrants on a week long camping trip in Waterton Lakes National Park organized by Outward Bound Canada. &ldquo;Before we came into this trip we never really had the chance to go into nature, it felt great, it was amazing, you don&rsquo;t get to see this kind of scenery that much.&rdquo; Sean also really enjoyed collecting bear fur for scientific research at the park. &ldquo;I find it interesting because I really like biology, it&rsquo;s fun.&rdquo;
    </div>
                                        </div>
                                        <!--/profile-->
                                        <div class="ni_3_col1">
                                            <div class="ni_subject_img"><img src="<? bloginfo('template_url'); ?>/images/ni_prof_19.jpg"/></div>
                                            <div class="ni_subject_name"> Justin McKeown </div>
                                            <div class="ni_subject_title"> Public Outreach Education Officer, Waterton Lakes National Park</div>
                                            <div class="ni_subject_quote">&ldquo;My hope is that maybe some of these kids get interested in national parks and in nature and want to do some of these jobs.&rdquo;</div>
                                            <div class="ni_subject_desc">Justin works for Parks Canada in Waterton Lakes National Park. He helped to organize the Outward Bound trip with the young new immigrants. One of the main activities that the teenagers did was collect bear fur for scientific analysis. &ldquo;I think it was a good chance to tell these new Canadian youth that bears aren&rsquo;t these crazy man-eating animals, they&rsquo;re there to be respected.&rdquo; says Justin. &ldquo;They&rsquo;re lovely to see, and they&rsquo;re to be respected, but not necessarily something that we have to fear.&rdquo; Justin hopes that the new Canadians will &ldquo;get interested in national parks and in nature and want to do some of these jobs.&rdquo;
    </div>
                                        </div>
                                        <!--/profile-->
                                        <div class="ni_3_col1 ni_col_last">
                                            <div class="ni_subject_img"> <img src="<? bloginfo('template_url'); ?>/images/ni_prof_20.jpg"/></div>
                                            <div class="ni_subject_name"> Kazi Hossain </div>
                                            <div class="ni_subject_title"> New Immigrant from Bangladesh <br />(4 years)</div>
                                            <div class="ni_subject_quote">&ldquo;In Canada, I totally got a different perspective, that people respect the nature. People do care about where they&rsquo;re living, people do care about the environment.&rdquo;</div>
                                            <div class="ni_subject_desc">Kazi and his wife, Shamima, are both from Bangladesh and live in Edmonton. Kazi works in agro-forestry. The couple signed up to explore Edmonton&rsquo;s North Saskatchewan River on a day trip set up by the resettlement agency, Edmonton Immigrant Services Association and River Watch. On this trip the new Canadians tested the health of the rivers using scientific kits. &ldquo;It was really fascinating...through this program today, we got that appreciation, you know, this is your environment, this is your ecosystem and this is your water. So you have to have the respect, and you do your part, what it takes to keep your water clean, keep your environment clean and keep your neighbours happy.&rdquo;</div>
                                        </div>
                                        <!--/profile-->
                                 	</div>
                                    <!--/ni_profile_row-->
                                    <div class="ni_profile_row clearfix">
                                         <div class="ni_3_col1">
                                            <div class="ni_subject_img"><img src="<? bloginfo('template_url'); ?>/images/ni_prof_21.jpg"/></div>
                                            <div class="ni_subject_name"> Shameem Haroon </div>
                                            <div class="ni_subject_title">New Immigrant from Bangladesh <br />(4 years)</div>
                                            <div class="ni_subject_quote">I love gardening, it brings you back to nature.</div>
                                            <div class="ni_subject_desc">Shameem is a senior and also a new immigrant from Bangladesh. She joined the Community Gardens program that CIWA and Calgary Parks Foundation offer. &ldquo;I was lonely, so I wanted to be with other ladies because it&rsquo;s a big support group and if we need any help with our lives, they&rsquo;re always there to support us.&rdquo;
    Besides the comradely Shameen also really enjoys being out in nature, &ldquo;Oh I love to play around with the soil because it brings you back to nature. God has made us from dirt and we go back to dirt.&rdquo;</div>
                                        </div>
                                        <!--/profile-->
                                        <div class="ni_3_col1">
                                            <div class="ni_subject_img"><img src="<? bloginfo('template_url'); ?>/images/ni_prof_22.jpg"/></div>
                                            <div class="ni_subject_name"> Mojnura Khan </div>
                                            <div class="ni_subject_title">Senior Immigrant Women Counselor, CIWA</div>
                                            <div class="ni_subject_quote">&ldquo;It is a therapy for them when they are coming, they forget about their problems. They forget about their life, they&rsquo;re completely lost in the nature.&rdquo; </div>
                                            <div class="ni_subject_desc">Mojnura helps the new senior immigrants who participate in the Community Gardens program put on by Calgary Immigration Women&rsquo;s Association and Calgary Parks Foundation. &ldquo;It is something they&rsquo;re creating, they&rsquo;re putting something in the soil, and growing stuff,&rdquo; says Mojnura. &ldquo;When they see...okay we can do the same thing with life too. If I put the seed...then it will grow, so they&rsquo;re learning about life also from the garden.&rdquo; Growing vegetables with the groups also helps the new senior immigrants to forget about the stress, isolation and loneliness they feel on a daily basis. &ldquo;When they are here, they don&rsquo;t remember their life. They&rsquo;re just lost in the garden...They found their place where they can lead and grow,&rdquo; explains Mojnura. 
    </div>
                                        </div>
                                        <!--/profile-->
                                        <div class="ni_3_col1 ni_col_last">
                                            <div class="ni_subject_img"> <img src="<? bloginfo('template_url'); ?>/images/ni_prof_23.jpg"/></div>
                                            <div class="ni_subject_name"> Mary Anne Robeson </div>
                                            <div class="ni_subject_title">Horticultural Therapist</div>
                                            <div class="ni_subject_quote">&ldquo;Nature and horticultural therapy heals mind, body and spirit.&rdquo;</div>
                                            <div class="ni_subject_desc">Mary Anne Robeson is the horticultural therapist who works with the new senior immigrants in the Community Gardens program. She says besides helping the new Canadians she is also learning a lot from them about the way they grew food in their country. &ldquo;They will look at a food and lets say cabbage or cilantro or even some of the weeds and they&rsquo;ll tell me in my home country we do it this way and when I&rsquo;m weeding they&rsquo;ll say, don&rsquo;t weed that because in my home country we put that in our salads,&rdquo; explains Mary. &ldquo;So I come away learning about their culture, their language, how to use the foods.&rdquo; 
    </div>
                                        </div>
                                        <!--/profile-->
                                        
                                        
									</div>
                                   	<!--/ni_profile_row-->
                                    
                                   
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
