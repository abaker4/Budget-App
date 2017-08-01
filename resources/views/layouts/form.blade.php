


<form method="POST" action="/daily_total">
    <style>
    </style>

    {{csrf_field()}}
@include('layouts.errors')
            <div class="hero">
                <div class="hero-body">
                    <div class="has-text-centered is-hidden-desktop is-visible-mobile field-has-addons">
                        <input class="picker2" id="numInput" name="amount" type="text" style="margin-bottom: 3rem; margin-right: 12.5rem;">
                        <ul id="keyboard">
                            <li id="one_picker" data-value="1" class="letter">1</li>
                            <li id="two_picker" data-value="2" class="letter">2</li>
                            <li id="three_picker"data-value="3" class="letter">3</li>
                            <li id="four_picker"data-value="4" class="letter clearl">4</li>
                            <li id="five_picker"data-value="5" class="letter">5</li>
                            <li id="six_picker"data-value="6" class="letter">6</li>
                            <li id="seven_picker"data-value="7" class="letter clearl">7</li>
                            <li id="eight_picker"data-value="8" class="letter ">8</li>
                            <li id="nine_picker"data-value="9" class="letter">9</li>
                            <li id="period_picker"data-value="." class="letter clearl">.</li>
                            <li id="zero_picker"data-value="0" class="letter">0</li>
                            <li id="delete" class="letter"><</li>
                            <li><button type="submit">Submit</button></li>
                        </ul>
                        <p class="control clearl">
                             <span class="select">
                               <select name="daily_category_id">
                                   <option value="1">Groceries</option>
                                   <option value="2">Restaurants</option>
                                   <option value="3">Alcohol/Bars</option>
                                   <option value="4">Coffee Shops</option>
                                   <option value="5">Gas/Fuel</option>
                                   <option value="6">Clothing</option>
                                   <option value="7">Fast Food</option>

                               </select>
                             </span>
                        </div>
                </div>
            </div>
</form>