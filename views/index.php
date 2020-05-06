%% views/header.html %%

<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <div class="h3">Try it out!</div>
        <div>
          <small>
            This form can be used to test any number to see if it is a Fizz
            number, a Buzz number, a FizzBuzz number, or just a normal number.
            Enter a number below, or post the <code>start</code> and <code>stop</code>
            parameters to the location <code>@@fizzbuzz/check@@</code>. It will return
            a JSON string with the key being the number and the value being the
            the status of the number.
          </small>
        </div>
      </div>

      <div class="card-body">
        <form action="@@fizzbuzz/test@@" method="post">
          <div class="form-row">
            <div class="col">
              <label for="start">Starting number</label>
              <input type="number" class="form-control" id="start" name="start" placeholder="Enter number" required>
            </div>
            <div class="col">
              <label for="stop">Stopping number</label>
              <input type="number" class="form-control" id="stop" name="stop" placeholder="Enter number" required>
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