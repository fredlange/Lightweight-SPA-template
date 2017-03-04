<h1>Form Page</h1>
<p>This is a form page</p>
{{test}}

<div id="form_container">
  <form ng-submit="submit(contactform)" name="contactform" method="post" class="form-horizontal" role="form">
                        
                        <div class="form-group" ng-class="{ 'has-error': contactform.inputName.$invalid && submitted }">
                            <label for="inputName" class="col-lg-2 control-label">Name</label>
                            <div class="col-lg-10">
                                <input ng-model="formData.inputName" type="text" class="form-control" id="inputName" name="inputName" placeholder="Your Name" required>
                            </div>
                        </div>

                        <div class="form-group" ng-class="{ 'has-error': contactform.inputCompany.$invalid && submitted }">
                            <label for="inputCompany" class="col-lg-2 control-label">Company</label>
                            <div class="col-lg-10">
                                <input ng-model="formData.inputCompany" type="text" class="form-control" id="inputCompany" name="inputCompany" placeholder="Company name">
                            </div>
                        </div>

                        <div class="form-group" ng-class="{ 'has-error': contactform.inputEmail.$invalid && submitted }">
                            <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                            <div class="col-lg-10">
                                <input ng-model="formData.inputEmail" type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Your Email" required>
                            </div>
                        </div>

                        <div class="form-group" ng-class="{ 'has-error': contactform.inputPhone.$invalid && submitted }">
                            <label for="inputPhone" class="col-lg-2 control-label">Phone</label>
                            <div class="col-lg-10">
                                <input ng-model="formData.inputPhone" type="text" class="form-control" id="inputPhone" name="inputPhone" placeholder="Phone number" required>
                            </div>
                        </div>

                        <div class="form-group" ng-class="{ 'has-error': contactform.inputMessage.$invalid && submitted }">
                            <label for="inputMessage" class="col-lg-2 control-label">Message</label>
                            <div class="col-lg-10">
                                <textarea ng-model="formData.inputMessage" class="form-control" rows="4" id="inputMessage" name="inputMessage" placeholder="Your message..." required></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button type="submit" class="btn btn-default" ng-disabled="submitButtonDisabled">
                                    Send Message
                                </button>
                            </div>
                        </div>
                        
                    </form>
                    <p ng-class="result" style="padding: 15px; margin: 0;">{{ resultMessage }}</p>
  </div>

