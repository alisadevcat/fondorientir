     <form action="/lawyer-form" method="POST" name="lawyerForm">
         @csrf
         <div class="form-group">
             <input type="text" class="form-control" name="name" placeholder="Контактное лицо">
              <span class="text-danger" id="nameError"></span>
         </div>
         <div class="form-group">
             <input type="email" class="form-control" name="email" placeholder="Электронный адрес">
             <span class="text-danger" id="emailError"></span>
         </div>

   <div class="form-group">
             <input type="text" class="form-control" name="phone" placeholder="Ваш контактный телефон">
             <span class="text-danger" id="phoneError"></span>
         </div>
         <div class="form-group shadow-textarea">
             <textarea class="form-control rounded-0" id="formControlTextarea" rows="5" cols="5"
                 placeholder="Задайте свой вопрос" name="message"></textarea>
                  <span class="text-danger" id="messageError"></span>
         </div>
         <div id="law-success"></div>
         <input type="submit" class="form-group btn btn-primary" id="lawyer-btn" value="Отправить">
     </form>

        <script src="/assets/js/ajax/lawyer-ajax.js"></script>