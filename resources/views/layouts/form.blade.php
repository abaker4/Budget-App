        <form method="POST" action="/daily_total">

                {{csrf_field()}}

            @include('layouts.errors')
            <div class="hero">
                <div class="hero-body">
                    <div class="has-text-centered is-hidden-desktop is-visible-mobile field-has-addons">
                        <input class="picker2" id="numInput" name="amount" type="text" style="margin-bottom: 3rem; margin-right: 12.5rem;" required>
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
                                   <option value="1">Restaurants</option>
                                   <option value="2">Alcohol/Bars</option>
                                   <option value="3">Coffee Shops</option>
                                   <option value="4">Clothing</option>
                                   <option value="5">Fast Food</option>
                                   <option value="6">Groceries</option>
                                   <option value="7">Gas/Fuel</option>
                               </select>
                             </span>
                        </p>
                    </div>
                 </div>
             </div>
        </form>
