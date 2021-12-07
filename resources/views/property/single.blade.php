<x-guest-layout>
    {{-- Breadcrumb --}}
    <div class="shadow-md border-2 border-gray-300 py-2 bg-white mt-28">
        <div class="container mx-auto">
            <ul class="flex items-center">
                <li><a class="text-base text-red-800" href="#">Property</a></li>
                <li class="mx-3"><i class="fa fa-angle-right"></i></li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing.</li>
            </ul>
        </div>
    </div>

    <!-- Title & Share -->
    <div class="bg-white py-8">
        <div class="container mx-auto">
            <div class="flex justify-between">
                <div class="w-8/12">
                    <h2 class="text-3xl text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam enim
                        reprehenderit quas</h2>
                    <h3 class="text-lg mt-2">Price: <span class="text-red-800">
                        @if ($property)
                                {{ number_format($property->price, 2, ',', ',') }} TL
                            @else
                                500,00,00 TL
                            @endif
                </span></h3>
                </div>
                <div class="w-3/12">
                    <ul class="flex justify-end -mr-2">
                        <li>
                            <a class="flex flex-col justify-center items-center mx-2 border-2 border-gray-200 p-3 hover:border-red-400 duration-200"
                               href="#">
                                <i class="fa fa-print mb-2"></i>
                                <span class="text-md block">Print</span>
                            </a>
                        </li>
                        <li>
                            <a class="flex flex-col justify-center items-center mx-2 border-2 border-gray-200 p-3 hover:border-red-400 duration-200"
                               href="#">
                                <i class="fa fa-heart-o mb-2"></i>
                                <span class="text-md block">Save</span></a>
                        </li>
                        <li>
                            <a class="flex flex-col justify-center items-center mx-2 border-2 border-gray-200 p-3 hover:border-red-400 duration-200"
                               href="#">
                                <i class="fa fa-share-alt mb-2"></i>
                                <span class="text-md block">Share</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Content -->
    <div class="container mx-auto py-10">
        <div class="flex justify-between">

            {{-- Left Content --}}
            <div class="w-9/12">
                <div id="slider" class="">
                    <div class="gallery-slider">
                        <div style="background-image: url(/img/hero-bg.jpg)" class="single-gallery-item bg-cover bg-center"></div>
                        <div style="background-image: url(/img/hero-bg.jpg)" class="single-gallery-item bg-cover bg-center"></div>
                        <div style="background-image: url(/img/hero-bg.jpg)" class="single-gallery-item bg-cover bg-center"></div>
                        <div style="background-image: url(/img/hero-bg.jpg)" class="single-gallery-item bg-cover bg-center"></div>
                        <div style="background-image: url(/img/hero-bg.jpg)" class="single-gallery-item bg-cover bg-center"></div>
                        <div style="background-image: url(/img/hero-bg.jpg)" class="single-gallery-item bg-cover bg-center"></div>
                        <div style="background-image: url(/img/hero-bg.jpg)" class="single-gallery-item bg-cover bg-center"></div>
                        <div style="background-image: url(/img/hero-bg.jpg)" class="single-gallery-item bg-cover bg-center"></div>
                        <div style="background-image: url(/img/hero-bg.jpg)" class="single-gallery-item bg-cover bg-center"></div>
                        <div style="background-image: url(/img/hero-bg.jpg)" class="single-gallery-item bg-cover bg-center"></div>
                        <div style="background-image: url(/img/hero-bg.jpg)" class="single-gallery-item bg-cover bg-center"></div>
                    </div>

                    <div class="thumbnail-slider">
                        <div style="background-image: url(/img/hero-bg.jpg)" class="single-thumbnail-item bg-cover bg-center"></div>
                        <div style="background-image: url(/img/hero-bg.jpg)" class="single-thumbnail-item bg-cover bg-center"></div>
                        <div style="background-image: url(/img/hero-bg.jpg)" class="single-thumbnail-item bg-cover bg-center"></div>
                        <div style="background-image: url(/img/hero-bg.jpg)" class="single-thumbnail-item bg-cover bg-center"></div>
                        <div style="background-image: url(/img/hero-bg.jpg)" class="single-thumbnail-item bg-cover bg-center"></div>
                        <div style="background-image: url(/img/hero-bg.jpg)" class="single-thumbnail-item bg-cover bg-center"></div>
                        <div style="background-image: url(/img/hero-bg.jpg)" class="single-thumbnail-item bg-cover bg-center"></div>
                        <div style="background-image: url(/img/hero-bg.jpg)" class="single-thumbnail-item bg-cover bg-center"></div>
                        <div style="background-image: url(/img/hero-bg.jpg)" class="single-thumbnail-item bg-cover bg-center"></div>
                        <div style="background-image: url(/img/hero-bg.jpg)" class="single-thumbnail-item bg-cover bg-center"></div>
                    </div>
                </div>
                {{-- Overview --}}
                <div class="flex justify-between items-center bg-white p-8 mt-10 shadow-sm">
                    <h4 class="text-lg w-2/12">Overview</h4>
                    <div class="border-l-2 border-gray-300 pl-5 ml-5 w-10/12 text-base">
                        <p>Beachfront suites located at the starting point of the Blue Voyage in Bodrum, these sea view
                            properties are designed and operated in partnership with a worldwide hotel chain and feature
                            outstanding on-site facilities for 5-star luxury living guaranteed – anyone who purchases
                            here can rest assured that these are the very best in fully-managed and fully-serviced
                            residences in all of Turkey.</p>
                    </div>
                </div>

                {{-- Property Featuers --}}
                <div class="flex justify-between items-center bg-white p-8 mt-10 shadow-sm">
                    <h4 class="text-lg w-2/12">Property Features</h4>
                    <div class="ml-2 w-10/12 text-base flex justify-between">
                        <div class="flex-1 border-l-2 border-gray-300 ml-3 pl-3 self-center">
                            <ul>
                                <li class="flex text-sm mb-2">
                                    <div class="flex"><i
                                            class="fa fa-home mr-2 text-red-400 w-5 text-center"></i><span
                                            class="text-sm">Type:</span></div>
                                    <span class="ml-2 font-bold">Penthouse</span>
                                </li>
                                <li class="flex text-sm">
                                    <div class="flex"><i
                                            class="fa fa-bed mr-2 text-red-400 w-5 text-center"></i><span
                                            class="text-sm">Bedrooms:</span></div>
                                    <span class="ml-2 font-bold">4</span>
                                </li>
                            </ul>
                        </div>
                        <div class="flex-1 border-l-2 border-gray-300 ml-3 pl-3 self-center">
                            <ul>
                                <li class="flex text-sm mb-2">
                                    <div class="flex"><i
                                            class="fa fa-shower mr-2 text-red-400 w-5 text-center"></i><span
                                            class="text-sm">Bathrooms:</span></div>
                                    <span class="ml-2 font-bold">4</span>
                                </li>
                                <li class="flex text-sm">
                                    <div class="flex"><i
                                            class="fa fa-map-marker mr-2 text-red-400 w-5 text-center"></i><span
                                            class="text-sm">Location:</span></div>
                                    <span class="ml-2 font-bold">Bodrum</span>
                                </li>
                            </ul>
                        </div>
                        <div class="flex-1 border-l-2 border-gray-300 ml-3 pl-3 self-center">
                            <ul>
                                <li class="flex text-sm mb-2">
                                    <div class="flex"><i
                                            class="fa fa-gratipay mr-2 text-red-400 w-5 text-center"></i><span
                                            class="text-sm">Living space sqm:</span></div>
                                    <span class="ml-2 font-bold">327</span>
                                </li>
                                <li class="flex text-sm">
                                    <div class="flex"><i
                                            class="fa fa-low-vision mr-2 text-red-400 w-5 text-center"></i><span
                                            class="text-sm">Pool</span></div>
                                    <span class="ml-2 font-bold">Private</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- Overview --}}
                <div class="flex justify-between items-center bg-white p-8 mt-10 shadow-sm">
                    <h4 class="text-lg w-2/12">Why buy this Property</h4>
                    <div class="border-l-2 border-gray-300 pl-5 ml-5 w-10/12 text-base">
                        <ul>
                            <li>- Five-star homes with access to private bay and beach</li>
                            <li>- Designed in partnership with worldwide hotel chain</li>
                            <li>- Hotel services and on-site social facilities for residents</li>
                            <li>- All suites are listed for sale as completely furnished</li>
                            <li>- Private swimming pools with magnificent full sea panorama</li>
                            <li>- Dedicated rental team for investors and those seeking income</li>
                            <li>- Land and sea shuttle services available</li>
                        </ul>
                    </div>
                </div>

                {{-- Description --}}
                <div class="bg-white p-8 mt-10 shadow-sm" id="description">

                    <h2 class="font-bold mb-5 text-2xl"> FACILITIES &amp; LOCATION</h2>

                    <p>With beautiful views across the sea and bay, these stunning properties are luxury-designed
                        and tick all the boxes for those looking for an elite lifestyle in an exclusive development
                        in a highly sought after area of Bodrum, within driving distance to the city centre and with
                        sailing options, restaurants, private pools, and a plethora of other features available.</p>

                    <h3>About the project and residences</h3>
                    <p>There are luxury suites for sale, designed with exclusive and outstanding architecture with
                        attention to detail in every corner. There are different floor plans available, with
                        residences ranging in size for all types of buyers. Buyers can choose from duplex properties
                        or penthouse homes. Garden floor duplex residences and all penthouses have their own private
                        swimming pools attached for added comfort and a luxury lifestyle guaranteed.</p>
                    <p>By owning a property within this development, you are entitled access to outstanding, world
                        class on-site social and communal facilities run in partnership with a worldwide
                        award-winning hotel brand, including everything from maintenance to housekeeping to sea
                        shuttle services taking you to Bodrum Marina – life here is a 5-star resort on a daily basis
                        and all just a phone call away; the developer has included and thought of everything.</p>
                    <p>Inside, each suite has been fully furnished and decorated from top to bottom, leaving you
                        with only the difficult task left of packing your suitcase to head for Bodrum as absolutely
                        everything else is ready and waiting for you. All properties are fitted with the latest
                        technologies and mod cons to provide a luxury lifestyle at home. Floor space has been
                        perfectly planned inside and out to take advantage of full open sea and bay views
                        throughout. Garden floor duplexes and penthouse suites have private swimming pools.</p>

                    <p><strong>Features and facilities include</strong></p>

                    <ul>
                        <li>- Access to private bay and beach area</li>
                        <li>- Access to private bay and beach area</li>
                        <li>- Access to private bay and beach area</li>
                        <li>- Access to private bay and beach area</li>
                        <li>- Access to private bay and beach area</li>
                        <li>- Access to private bay and beach area</li>
                        <li>- Access to private bay and beach area</li>
                        <li>- Access to private bay and beach area</li>
                        <li>- Access to private bay and beach area</li>
                    </ul>



                    <p><strong>Property prices and availability</strong></p>
                    <p>The project is split into two sections – luxury residences and valley residences, all
                        situated in one of the most stunning bays in Yaliciftlik. Property prices and availability
                        range from the following:&nbsp;</p>
                    <p>- 42 residences from three – seven bedrooms and sized 327m2 – 675m2 for sale from 1,750,000
                        Euro.&nbsp;</p>
                    <p><strong>NOTE</strong>: Prices displayed exclude VAT.</p>

                    <p><strong>Rental potential</strong></p>
                    <p>Should you desire to rent your suite out when not in use or are an investor looking for high
                        end opportunities in Bodrum, there is a dedicated rental team on site happy to assist you
                        and rent your property out on your behalf.</p>

                    <p><strong>Distances by land</strong></p>
                    <ul>
                        <li>- Access to private bay and beach area</li>
                        <li>- Access to private bay and beach area</li>
                        <li>- Access to private bay and beach area</li>
                        <li>- Access to private bay and beach area</li>
                        <li>- Access to private bay and beach area</li>
                        <li>- Access to private bay and beach area</li>
                        <li>- Access to private bay and beach area</li>
                        <li>- Access to private bay and beach area</li>
                        <li>- Access to private bay and beach area</li>
                    </ul>

                    <p><strong>Distances by sea</strong></p>
                    <ul>
                        <li>- Access to private bay and beach area</li>
                        <li>- Access to private bay and beach area</li>
                        <li>- Access to private bay and beach area</li>
                        <li>- Access to private bay and beach area</li>
                        <li>- Access to private bay and beach area</li>
                        <li>- Access to private bay and beach area</li>
                        <li>- Access to private bay and beach area</li>
                        <li>- Access to private bay and beach area</li>
                        <li>- Access to private bay and beach area</li>
                    </ul>

                </div>

            </div>{{-- Left Content End --}}



            {{-- Sidebar --}}
            <div class="w-3/12 ml-6">
                <div class="border-2 border-red-800 px-5 py-3 text-center font-light text-base">
                    <p>Subscribe to Property Turkey media for blogs/news/videos</p>
                </div>
                {{-- Form --}}
                <div class="px-4 py-5 text-left bg-gray-300 my-5">
                    <h1 class="text-2xl font-normal leading-none mb-5">Enquire about this property</h1>

                    <form action="#" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="">
                            <label class="inputLabel" for="name">Name <span
                                    class="text-red-800 font-serif">*</span></label>
                            <input class="inputField" type="text" id="name" name="name" placeholder="First Name">
                        </div>

                        <div class="mt-5">
                            <label class="inputLabel" for="phone">Phone <span
                                    class="text-red-800 font-serif">*</span></label>
                            <input class="inputField" type="text" id="phone" name="phone" placeholder="Phone">
                        </div>

                        <div class="mt-5">
                            <label class="inputLabel" for="email">Email <span
                                    class="text-red-800 font-serif">*</span></label>
                            <input class="inputField" type="email" id="email" name="email" placeholder="E-mail">
                        </div>

                        <div class="mt-5">
                            <label class="inputLabel" for="message">Message <span
                                    class="text-red-800 font-serif">*</span></label>
                            <textarea class="inputField" id="message" name="message" rows="4"
                                      placeholder="I'm interested in this property"></textarea>
                        </div>
                        <div class="mt-5">
                            <button type="submit"
                                    class="w-full border-2 uppercase text-center py-3 font-semibold border-red-800 hover:bg-transparent hover:text-red-800 duration-200  text-white bg-red-800 rounded-none"><i class="fa fa-commenting mr-2"></i>Request
                                Details</button>
                        </div>

                    </form>
                </div>
            </div>


        </div>

    </div>
</x-guest-layout>
