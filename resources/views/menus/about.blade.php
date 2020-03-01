<!--Start About Section-->
@php
    $years = \Carbon\Carbon::parse('2014-08-05')->diffInYears(now());
@endphp
<section class="about pt-page" id="about">
    <div class="scroll__content">
        <div class="sec_title">
            <h2>@lang('website.sections.about.title')</h2>
        </div>
        <div class="sec__content">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <img src="{{ asset('/images/author.jpg') }}" class="full_width about__img" alt="author">
                    </div>
                    <div class="col-xs-12 col-sm-8">
                        <div class="heading">
                            <h2>@lang('website.sections.about.heading')</h2>
                        </div>
                        <p class="text-justify">@lang('website.sections.about.description_1', ['years' => $years])</p>
                        <p class="text-justify">@lang('website.sections.about.description_2')</p>
                    </div>
                </div>

                <!-- Skills -->
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <h3 class="subtitle margin-top-55">@lang('website.sections.about.skills_frontend')
                            <svg width="66px" height="8px" viewBox="0 0 66 8" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g class="Web" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(-147.000000, -464.000000)" opacity="0.2" stroke-linecap="round" stroke-linejoin="round">
                                    <g class="Header" stroke="#FFFFFF" stroke-width="3">
                                        <path d="M149,466 C152.87377,466 152.87377,470 156.747541,470 C160.621311,470 160.621311,466 164.493293,466 C168.367064,466 168.367064,470 172.240834,470 C176.112816,470 176.112816,466 179.984798,466 C183.858569,466 183.858569,470 187.730551,470 C191.607898,470 191.607898,466 195.483457,466 C199.362593,466 199.362593,470 203.241728,470 C207.120864,470 207.120864,466 211,466"></path>
                                    </g>
                                </g>
                            </svg>
                        </h3>
                        <div class="skills">

                            <!-- Skill 1 -->
                            <div class="skill">
                                <span>@lang('website.sections.about.skills.html')</span>
                                <span class="percentage">90%</span>
                                <div class="progress_bg">
                                    <div class="progress_bar"></div>
                                </div>
                            </div>

                            <!-- Skill 2 -->
                            <div class="skill">
                                <span>@lang('website.sections.about.skills.git')</span>
                                <span class="percentage">90%</span>
                                <div class="progress_bg">
                                    <div class="progress_bar"></div>
                                </div>
                            </div>

                            <!-- Skill 3 -->
                            <div class="skill">
                                <span>@lang('website.sections.about.skills.jquery')</span>
                                <span class="percentage">80%</span>
                                <div class="progress_bg">
                                    <div class="progress_bar"></div>
                                </div>
                            </div>

                            <!-- Skill 4 -->
                            <div class="skill">
                                <span>@lang('website.sections.about.skills.css')</span>
                                <span class="percentage">75%</span>
                                <div class="progress_bg">
                                    <div class="progress_bar"></div>
                                </div>
                            </div>

                        </div><!--.skills-->
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <h3 class="subtitle margin-top-55">@lang('website.sections.about.skills_backend')
                            <svg width="66px" height="8px" viewBox="0 0 66 8" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g class="Web" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(-147.000000, -464.000000)" opacity="0.2" stroke-linecap="round" stroke-linejoin="round">
                                    <g class="Header" stroke="#FFFFFF" stroke-width="3">
                                        <path d="M149,466 C152.87377,466 152.87377,470 156.747541,470 C160.621311,470 160.621311,466 164.493293,466 C168.367064,466 168.367064,470 172.240834,470 C176.112816,470 176.112816,466 179.984798,466 C183.858569,466 183.858569,470 187.730551,470 C191.607898,470 191.607898,466 195.483457,466 C199.362593,466 199.362593,470 203.241728,470 C207.120864,470 207.120864,466 211,466"></path>
                                    </g>
                                </g>
                            </svg>
                        </h3>
                        <div class="skills">

                            <!-- Skill 1 -->
                            <div class="skill">
                                <span>@lang('website.sections.about.skills.php')</span>
                                <span class="percentage">93%</span>
                                <div class="progress_bg">
                                    <div class="progress_bar"></div>
                                </div>
                            </div>

                            <!-- Skill 2 -->
                            <div class="skill">
                                <span>@lang('website.sections.about.skills.sql')</span>
                                <span class="percentage">90%</span>
                                <div class="progress_bg">
                                    <div class="progress_bar"></div>
                                </div>
                            </div>

                            <!-- Skill 3 -->
                            <div class="skill">
                                <span>@lang('website.sections.about.skills.laravel')</span>
                                <span class="percentage">86%</span>
                                <div class="progress_bg">
                                    <div class="progress_bar"></div>
                                </div>
                            </div>

                            <!-- Skill 4 -->
                            <div class="skill">
                                <span>@lang('website.sections.about.skills.react_native')</span>
                                <span class="percentage">50%</span>
                                <div class="progress_bg">
                                    <div class="progress_bar"></div>
                                </div>
                            </div>

                        </div><!--.skills-->
                    </div>
                </div>

                <!--Fun Facts-->
                <h3 class="subtitle margin-top-55">@lang('website.sections.about.fun_facts')
                    <svg width="66px" height="8px" viewBox="0 0 66 8" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g class="Web" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(-147.000000, -464.000000)" opacity="0.2" stroke-linecap="round" stroke-linejoin="round">
                            <g class="Header" stroke="#FFFFFF" stroke-width="3">
                                <path d="M149,466 C152.87377,466 152.87377,470 156.747541,470 C160.621311,470 160.621311,466 164.493293,466 C168.367064,466 168.367064,470 172.240834,470 C176.112816,470 176.112816,466 179.984798,466 C183.858569,466 183.858569,470 187.730551,470 C191.607898,470 191.607898,466 195.483457,466 C199.362593,466 199.362593,470 203.241728,470 C207.120864,470 207.120864,466 211,466"></path>
                            </g>
                        </g>
                    </svg>
                </h3>
                <div class="row funFactsRow">

                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="fun-facts">
                            <div class="item">
                                <span class="pe-7s-smile"></span>
                                <h4>6</h4>
                                <h5>@lang('website.sections.about.facts.happy_clients')</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="fun-facts">
                            <div class="item">
                                <span class="pe-7s-portfolio"></span>
                                <h4>{{ $years }}</h4>
                                <h5>@lang('website.sections.about.facts.year_experience')</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="fun-facts">
                            <div class="item">
                                <span class="pe-7s-like2"></span>
                                <h4>15</h4>
                                <h5>@lang('website.sections.about.facts.projects_done')</h5>
                            </div>
                        </div>
                    </div>

                </div>

            </div><!--.container-->
        </div><!--.sec__content-->
    </div><!--.scroll__content-->
</section>
<!--End About Section-->
