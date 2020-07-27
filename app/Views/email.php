
<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<form action="<?= base_url("/email/send") ?>" method="post">
    <div class="row py-2">
        <div class="col">
          <input type="text" class="form-control" placeholder="Subject " name="subname" required>
        </div>
        <div class="col">
          <select name="kinds" class="form-control">
            <option value="Mr." selected>Mr.</option>
            <option value="Miss.">Miss.</option>
            <option value="Ms.">Ms.</option>
            <option value="Mrs.">Mrs.</option>
          </select>
        </div>
        <div class="col">
          <select name="respect" id="" class="form-control">
            <option value="Best Regards" selected>Best Regards</option>
            <option value="Sincerely Yours">Sincerelly Yours</option>
            <option value="Best Wishes">Best Wish</option>
            <option value="Kind Regards">Kind Regards</option>
            <option value="Warm Regards">Warm Regards</option>
            <option value="Thanks">Thanks</option>
          </select>
        </div>
    </div>
    <div class="row py-2">
        <div class="col">
          <input type="email" class="form-control" placeholder="Email " name="email" required>
        </div>
    </div>
    <div class="row py-2">
        <div class="col">
          <textarea name="message" id="sms" cols="30" rows="5" class="form-control" placeholder="Message" require></textarea>
        </div>
    </div>
    <div class="row py-2">
        <div class="col">
            <button type="submit" class="btn btn-block sm btn-info float-right">Send Email</button>
        </div>
    </div>
</form>
<?= $this->endSection() ?>						
				
