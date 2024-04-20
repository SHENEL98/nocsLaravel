@extends('temp_layouts/template')
@section('content')
@include('frontend.events.events_head_assets')
<style>
    /* Style for the modal */
    .modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);
        justify-content: center;
        align-items: center;
    }

    /* Style for the modal content (image) */
    .modal-content {
        max-width: 100%;
        max-height: 100%;
    }

    /* Style to close the modal */
    .close {
        position: absolute;
        top: 10px;
        right: 10px;
        color: #fff;
        font-size: 20px;
        cursor: pointer;
    }
</style>
<div id="content" class="site-content">
    <div class="container">
        <div class="row">
            <div id="primary" class="content-area col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <main id="main" class="site-main">
                    <article id="post-7" class="post-7 page type-page status-publish hentry">
                        <header class="entry-header tm-hide">
                            <h1 class="entry-title">About Us</h1>
                        </header>
                        <!-- .entry-header -->

                        <div class="entry-content">
                            <div data-elementor-type="wp-page" data-elementor-id="7" class="elementor elementor-7">
                                <section class="elementor-section elementor-top-section elementor-element elementor-element-19df570 elementor-section-stretched elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="19df570" data-element_type="section" data-settings='{"stretch_section":"section-stretched","background_background":"classic"}'>
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3d5efde" data-id="3d5efde" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-6d98a29 elementor-widget elementor-widget-heading" data-id="6d98a29" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <style>
                                                            /*! elementor - v3.15.0 - 09-08-2023 */
                                                            .elementor-heading-title {
                                                                padding: 0;
                                                                margin: 0;
                                                                line-height: 1;
                                                            }

                                                            .elementor-widget-heading .elementor-heading-title[class*="elementor-size-"]>a {
                                                                color: inherit;
                                                                font-size: inherit;
                                                                line-height: inherit;
                                                            }

                                                            .elementor-widget-heading .elementor-heading-title.elementor-size-small {
                                                                font-size: 15px;
                                                            }

                                                            .elementor-widget-heading .elementor-heading-title.elementor-size-medium {
                                                                font-size: 19px;
                                                            }

                                                            .elementor-widget-heading .elementor-heading-title.elementor-size-large {
                                                                font-size: 29px;
                                                            }

                                                            .elementor-widget-heading .elementor-heading-title.elementor-size-xl {
                                                                font-size: 39px;
                                                            }

                                                            .elementor-widget-heading .elementor-heading-title.elementor-size-xxl {
                                                                font-size: 59px;
                                                            }
                                                        </style>
                                                        <h2 class="elementor-heading-title elementor-size-default">
                                                            Halo Night
                                                        </h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section class="elementor-section elementor-top-section elementor-element elementor-element-3cb6c6fb elementor-section-stretched elementor-section-content-middle animated-slow elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="3cb6c6fa" data-element_type="section" data-settings='{"stretch_section":"section-stretched","animation":"fadeIn"}'>
                                    <div data-elementor-type="wp-page" data-elementor-id="2220" class="elementor elementor-2220">
                                        <section class="elementor-section elementor-top-section elementor-element elementor-element-85cb8c4 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" dFata-id="85cb8c4" data-element_type="section" data-settings='{"stretch_section":"section-stretched","background_background":"classic"}'>
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-add020d" data-id="add020d" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-7c58f3a elementor-invisible elementor-widget elementor-widget-heading" data-id="7c58f3a" data-element_type="widget" data-settings='{"_animation":"fadeInUp"}' data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h6 class="elementor-heading-title elementor-size-default">
                                                                    A bit of cleverness, speed, and strength. All
                                                                    carefully mixed together with teamwork.
                                                                    What do we obtain? The Seven Quests game.
                                                                    Our first big event consisted in a set of seven
                                                                    different games aimed at stimulating creativity and
                                                                    competitiveness in our young participants.
                                                                    Four teams were gathered to challenge themselves in
                                                                    highly structured tasks where victory had to be
                                                                    grabbed.
                                                                    Highly physical sports such as volleyball and
                                                                    dodgeball, along with games based on mind and
                                                                    teamwork contributed to create an atmosphere
                                                                    enjoyable for all. Everything accompanied with a
                                                                    flash mob where our staff coordinated the young with
                                                                    music and dancing!

                                                                </h6>
                                                            </div>
                                                        </div>
                                                        <div class="row" style="margin: 0; padding: 0;">
                                                            @for($i = 1; $i < 10; $i++) @php $imagePath='assets/src/event_1/' . $i . '.jpg' ; @endphp @if(file_exists(public_path($imagePath))) <div class="col-3" style="padding: 0;">

                                                                <img class="col-12" style="padding: 0;" src="{{ asset($imagePath) }}" onclick="handleImageClick('{{ asset($imagePath) }}')" alt="Image {{ $i }}">
                                                        </div>
                                                        @endif
                                                        @endfor
                                                    </div>
                                                    @include('frontend.events.event_modal')
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </section>
                            </div>
                            </section>
                        </div>
            </div>
            <!-- .entry-content -->
            </article>
            <!-- #post-7 -->
            </main>
            <!-- #main .site-main -->
        </div>
        <!-- #primary .content-area -->
    </div>
</div>
</div>

@endsection