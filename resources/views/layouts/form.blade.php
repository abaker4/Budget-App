<form method="POST" action="/dailyexpenses/daily_total">

    {{csrf_field()}}

    <div class="field has-addons">
        <p class="control">
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
        </p>
        <p class="control is-expanded">
            <input class="input" name="amount" type="text" placeholder="$ Amount">
        </p>
        <p class="control">
            <button class="button" type="submit">
                Submit
            </button>
        </p>
    </div>
</form>