<div {{ $attributes->merge(['class' => 'py-16 text-center text-sm text-black dark:text-white/70']) }}>

    <div class="flex justify-between grids-cols-2">

        <div class="flex grid">
            <div class="grid grid-cols-1 gap-1">

                <div>
                    <img src="{{ asset('images/logo.png') }}" alt="logo" class="img-responsive img-container" />
                </div>
                <div>

                    <h4 class="text-3xl text-center">{{ __('Fareeda') }}</h4>

                    <p><a href="mailto:info@fareeda.pro" class="text-2xl text-red-500 text-start"><i class="icofont-email"></i> &nbsp;info@fareeda.pro</a></p>
                    <ul class="flex text-2xl">
                        <li class="mx-2 my-2"><a href="https://www.facebook.com/profile.php?id=100090793551976"><i
                                    class="fa fa-facebook facebook"></i></a></li>


                        <li class="mx-2 my-2"><a
                                href="https://api.whatsapp.com/send?phone=+2250777146839&amp;text=https%3A%2F%2Fwww.fareeda.pro%2F" class="text-start"><i
                                    class="fa fa-whatsapp whatsapp"></i></a></li>

                        <li class="mx-2 my-2"><a href="http:// https://www.linkedin.com/in/fareeda-technologie-bb3a0b254/" class="text-start"><i
                                    class="fa fa-linkedin linkedin"></i></a></li>


                        <li class="mx-2 my-2">
                            <a style="text-decoration:underline" title="Click to call +2250777146839"
                                    href="javascript:void(0);"
                                    onclick="r=confirm('Press OK to call +2250777146839. After a few seconds your phone will ring.');if(r==true){ insertionPoint = document.getElementById('vfCallbackPlaceholder'); if(insertionPoint==null){ insertionPoint=document.createElement('vfCallbackPlaceholder'); insertionPoint.style.cssText='width:0; height:0; overflow:hidden; visibility:hidden;'; document.body.appendChild(insertionPoint); } insertionPoint.setAttribute('phone','002250777146839'); var vf_event = document.createEvent('Events'); vf_event.initEvent('VoipfoneExtensionEvent', true, false); insertionPoint.dispatchEvent(vf_event); } return false;"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="flex grid">

            <div class="grid grid-cols-1 gap-1 text-xl">
                <h3 class="text-2xl font-bold text-start">
                  Liens rapides
                </h3>
                <ul>
                    <li>
                        <a href="{{ route('dashboard')}}" class="hover:text-red-500">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('dashboard')}}" class="hover:text-red-500">Users</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</div>
