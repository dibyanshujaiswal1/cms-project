@extends('frontend.layouts.master')
@section('content')
<div role="main" class="main main-page">

    <div class="clearfix"></div>


    <div class="help gav-help-region">
        <div class="container">
            <div class="content-inner">
                <div>
                    <div data-drupal-messages-fallback class="hidden"></div>

                </div>

            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="clearfix"></div>

    <div id="content" class="content content-full">
        <div class="container">
            <div class="content-main-inner">
                <div class="row">






                    <div id="page-main-content" class="main-content col-xs-12 col-md-6 sb-r ">

                        <div class="main-content-inner">


                            <div class="content-main">
                                <div>
                                    <div id="block-gavias-kunco-content" class="block block-system block-system-main-block no-title">


                                        <div class="content block-content">
                                            @if(Session::has('message'))
                                            <p style="color:green;text-align:center">{{Session::get('message')}}</p>
                                            @endif
                                            <form class="contact-message-feedback-form contact-message-form contact-form" data-user-info-from-browser data-drupal-selector="contact-message-feedback-form" action="{{route('add.contact')}}" method="post" id="contact-message-feedback-form" accept-charset="UTF-8">
                                                @csrf
                                                <div class="contact-feedback">
                                                    <div class="form-group">
                                                        <div class="js-form-item form-item js-form-type-textfield form-item-name js-form-item-name form-no-label">
                                                            <input placeholder="Your name*" class="form-control form-text required" data-drupal-selector="edit-name" type="text" id="edit-name" name="name" value="" size="60" maxlength="255" required="required" aria-required="true" />
                                                            @error('name')
                                                            <span style="color:red">{{$message}}</span>
                                                            @enderror

                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="js-form-item form-item js-form-type-email form-item-mail js-form-item-mail form-no-label">
                                                            <input placeholder="Your email address*" class="form-control form-email required" data-drupal-selector="edit-mail" type="email" id="edit-mail" name="email" value="" size="60" maxlength="254" required="required" aria-required="true" />

                                                            @error('email')
                                                            <span style="color:red">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="field--type-string field--name-subject field--widget-string-textfield js-form-wrapper form-wrapper" data-drupal-selector="edit-subject-wrapper" id="edit-subject-wrapper">
                                                        <div class="form-group">
                                                            <div class="js-form-item form-item js-form-type-textfield form-item-subject-0-value js-form-item-subject-0-value form-no-label">
                                                                <input class="js-text-full text-full form-control form-text required" placeholder="Subject*" data-drupal-selector="edit-subject-0-value" type="text" id="edit-subject-0-value" name="subject" value="" size="60" maxlength="100" required="required" aria-required="true" />

                                                                @error('subject')
                                                                <span style="color:red">{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="field--type-string-long field--name-message field--widget-string-textarea js-form-wrapper form-wrapper" data-drupal-selector="edit-message-wrapper" id="edit-message-wrapper">
                                                        <div class="clearfix">
                                                            <div class="form-group">
                                                                <div class="js-form-item form-item js-form-type-textarea form-item-message-0-value js-form-item-message-0-value form-no-label">
                                                                    <div>
                                                                        <textarea class="js-text-full text-full form-control form-textarea required" placeholder="Message*" data-drupal-selector="edit-message-0-value" id="edit-message-0-value" name="message" rows="12" cols="60" required="required" aria-required="true"></textarea>
                                                                        @error('message')
                                                                        <span style="color:red">{{$message}}</span>
                                                                        @enderror
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <input autocomplete="off" data-drupal-selector="form-cat0w13z8z82wug2wnjqhdxib7qfjz3mgbonh67e-88" type="hidden" name="form_build_id" value="form-CAT0w13z8z82wug2wNJqhDXib7QfJZ3MGBonH67e-88" />
                                                    <input data-drupal-selector="edit-contact-message-feedback-form" type="hidden" name="form_id" value="contact_message_feedback_form" />
                                                    <div class="field--type-language field--name-langcode field--widget-language-select js-form-wrapper form-wrapper" data-drupal-selector="edit-langcode-wrapper" id="edit-langcode-wrapper">

                                                    </div>
                                                    <div class="clearfix">
                                                        <div data-drupal-selector="edit-actions" class="form-actions js-form-wrapper form-wrapper" id="edit-actions"><input class="btn btn-theme-submit button button--primary js-form-submit form-submit" data-drupal-selector="edit-submit" type="submit" id="edit-submit" name="op" value="Send message" />
                                                            <input data-drupal-selector="edit-preview" type="submit" id="edit-preview" name="op" value="Preview" class="button js-form-submit form-submit" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <!-- Sidebar Left -->
                    <!-- End Sidebar Left -->

                    <!-- Sidebar Right -->



                    <!-- End Sidebar Right -->

                </div>
            </div>
        </div>
    </div>



</div>
@endsection