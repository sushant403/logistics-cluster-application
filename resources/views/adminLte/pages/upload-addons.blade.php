<x-base-layout>

    <x-slot name="pageTitle">
        @lang('view.system_update')
    </x-slot>
    <section class="addon">  
        <div class="card mb-6 mb-xl-12 ">
            <div class="container mt-5 mb-3">
                
                <div class="message  message--warning">
                    <h3>@lang('view.There_no_addons_here') <a href="#" >@lang('view.from_here')</a></h3>
                </div>
                    
                <div class="row">
                    <div class="col-md-6">
                        <div class="cards p-3 mb-2">
                            <div class="d-flex justify-content-between">
                                <div class="addon-container">
                                    <div class="icon">
                                        <img alt="Logo" src="https://play-lh.googleusercontent.com/gDavZwn0jvjh2aakfw1V8S_Czu-HBKwq4KgSsrCMY90sM9RZfc7q6V0lkEP5YRav2NE=w480-h960-rw" class="logo" /> 
                                    </div>
                                    <div class="ms-2 c-details d-block">
                                        <h2 class="mb-0 mt-5 d-block">Driver App Addon</h2> 
                                    </div>
                                </div>
                            </div>
                            <div class="mt-5">
                                <div class="mt-5">
                                    <div  class="mb-5">
                                        <label class="switch">
                                            <input type="checkbox">
                                            <span class="slider round"></span>
                                        </label>
                                        <div class="row addonalert" >
                                            After activation, you can go here to complete the steps . <a style="color : #FF7324" href="#" >Configure Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="cards p-3 mb-2">
                            <div class="d-flex justify-content-between">
                                <div class="addon-container">
                                    <div class="icon">
                                        <img alt="Logo" src="https://play-lh.googleusercontent.com/gDavZwn0jvjh2aakfw1V8S_Czu-HBKwq4KgSsrCMY90sM9RZfc7q6V0lkEP5YRav2NE=w480-h960-rw" class="logo" /> 
                                    </div>
                                    <div class="ms-2 c-details d-block">
                                        <h2 class="mb-0 mt-5 d-block">Driver App Addon</h2> 
                                    </div>
                                </div>
                            </div>
                            <div class="mt-5">
                                <div class="mt-5">
                                    <div  class="mb-5">
                                        <label class="switch">
                                            <input type="checkbox">
                                            <span class="slider round"></span>
                                        </label>
                                        <div class="row addonalert" >
                                            After activation, you can go here to complete the steps . <a style="color : #FF7324" href="#" >Configure Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-base-layout>