%% views/header.html %%

<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <div class="h3">FizzBuzz Service</div>
        <div>
          <small>
            This form can be used to test any number to see if it is a Fizz
            number, a Buzz number, a FizzBuzz number, or just a normal number.
          </small>
        </div>
      </div>

      <div class="card-body">
        <form action="@@fizzbuzz/check@@" method="post">
          <div class="form-row">
            <div class="col">
              <label for="number">Number to test</label>
              <input type="number" class="form-control" id="number" name="number" placeholder="Enter number" required>
            </div>
          </div>
          <div class="form-row mt-4 float-right">
            <div class="btn-toolbar align-middle">
              <button type="submit" class="btn btn-primary mr-1 d-flex justify-content-center align-content-between"><span class="material-icons">send</span>&nbsp;Submit</button>
              <button class="btn btn-secondary mr-1 d-flex justify-content-center align-content-between" onclick="get('@@index@@')"><span class="material-icons">cancel</span>&nbsp;Cancel</button>
            </div>
          </div>
        </form>
      </div>
    </div>

  </div>
</div>
  
%% views/footer.html %% 