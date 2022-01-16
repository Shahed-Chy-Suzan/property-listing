<form action="{{route('properties')}}" method="GET" class="flex justify-between">
    <div class="flex w-7/12 justify-between items-center">
        <div class="flex flex-col mx-3">
            <label for="sale">Rent or Sale</label>
            <select id="sale" name="sale" class="border-0 focus:ring-0">
                <option value="">Rent or Sale</option>
                <option {{request('sale') == '2' ? 'selected="selected"' : ''}} value="2">Rent</option>
                <option {{request('sale') == '1' ? 'selected="selected"' : ''}} value="1">Sale</option>
            </select>
        </div>

        <div class="py-3 self-center border-gray-500 border"></div>
        <div class="flex flex-col mx-3">
            <label for="location">Location</label>
            <select id="location" name="location" class="border-0 focus:ring-0">
                <option value="">Location</option>
                @foreach($locations as $location)
                    <option {{request('location') == $location->id ? 'selected="selected"' : ''}} value="{{$location->id}}">{{$location->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="py-3 self-center border-gray-500 border"></div>
        <div class="flex flex-col mx-3">
            <label for="type">Type</label>
            <select id="type" name="type" class="border-0 focus:ring-0">
                <option value="">Type</option>
                <option {{request('type') == '3' ? 'selected="selected"' : ''}} value="3">Land</option>
                <option {{request('type') == '1' ? 'selected="selected"' : ''}} value="1">Apartment</option>
                <option {{request('type') == '2' ? 'selected="selected"' : ''}} value="2">Villa</option>
            </select>
        </div>
        <div class="py-3 self-center border-gray-500 border"></div>
        <div class="flex flex-col mx-3">
            <label for="price">Price</label>
            <select id="price" name="price" class="border-0 focus:ring-0">
                <option value="">Price</option>
                <option {{request('price') == '100000' ? 'selected="selected"' : ''}} value="100000">0 - 100000</option>
                <option {{request('price') == '200000' ? 'selected="selected"' : ''}} value="200000">100000 - 200000 Tk</option>
                <option {{request('price') == '300000' ? 'selected="selected"' : ''}} value="300000">200000 - 300000 Tk</option>
                <option {{request('price') == '400000' ? 'selected="selected"' : ''}} value="400000">300000 - 400000 Tk</option>
                <option {{request('price') == '500000' ? 'selected="selected"' : ''}} value="500000">400000 - 500000 Tk</option>
                <option {{request('price') == '500000+' ? 'selected="selected"' : ''}} value="500000+">500000 up Tk</option>
            </select>
        </div>
        <div class="py-3 self-center border-gray-500 border"></div>
        <div class="flex flex-col mx-3">
            <label for="bedrooms">Bedrooms</label>
            <select id="bedrooms" name="bedrooms" class="border-0 focus:ring-0">
                <option value="">Bedrooms</option>
                <option {{request('bedrooms') == '1' ? 'selected="selected"' : ''}} value="1">1</option>
                <option {{request('bedrooms') == '2' ? 'selected="selected"' : ''}} value="2">2</option>
                <option {{request('bedrooms') == '3' ? 'selected="selected"' : ''}} value="3">3</option>
                <option {{request('bedrooms') == '4' ? 'selected="selected"' : ''}} value="4">4</option>
                <option {{request('bedrooms') == '5' ? 'selected="selected"' : ''}} value="5">5</option>
            </select>
        </div>
    </div>

    <div class="flex justify-between items-center w-5/12 ml-5">
      <input name="property_name" value="{{request('property_name')}}" type="search" placeholder="Try to search property by property name" class="rounded-lg px-4 py-2 w-full mr-4 focus:border-gray-700 focus:ring-0">
      <button type="submit" class="btn">Search</button>
    </div>
</form>
