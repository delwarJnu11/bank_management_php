<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Create Account</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
  <div class="max-w-6xl mx-auto bg-white p-8 my-8 shadow-lg rounded-lg">
    <h1 class="text-2xl font-bold mb-6 text-gray-800 text-center">Create Account</h1>
    <form action="" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 md:grid-cols-2 gap-6">
      
      <!-- First Name -->
      <div class="flex flex-col">
        <label for="first_name" class="mb-1 text-gray-700">First Name</label>
        <input type="text" id="first_name" name="first_name" class="border border-slate-300 p-3 rounded-md focus:ring-2 focus:ring-sky-500 focus:outline-none">
        <span id="first_name_error" class="text-red-500 text-sm mt-1 hidden">This field is required.</span>
      </div>
      
      <!-- Last Name -->
      <div class="flex flex-col">
        <label for="last_name" class="mb-1 text-gray-700">Last Name</label>
        <input type="text" id="last_name" name="last_name" class="border border-slate-300 p-3 rounded-md focus:ring-2 focus:ring-sky-500 focus:outline-none">
        <span id="last_name_error" class="text-red-500 text-sm mt-1 hidden">This field is required.</span>
      </div>
      
      <!-- Email -->
      <div class="flex flex-col">
        <label for="email" class="mb-1 text-gray-700">Email</label>
        <input type="email" id="email" name="email" class="border border-slate-300 p-3 rounded-md focus:ring-2 focus:ring-sky-500 focus:outline-none">
        <span id="email_error" class="text-red-500 text-sm mt-1 hidden">Enter a valid email address.</span>
      </div>
      
      <!-- Phone -->
      <div class="flex flex-col">
        <label for="phone" class="mb-1 text-gray-700">Phone</label>
        <input type="text" id="phone" name="phone" class="border border-slate-300 p-3 rounded-md focus:ring-2 focus:ring-sky-500 focus:outline-none">
        <span id="phone_error" class="text-red-500 text-sm mt-1 hidden">This field is required.</span>
      </div>

      <!-- Password -->
      <div class="flex flex-col">
        <label for="password" class="mb-1 text-gray-700">Password</label>
        <input type="password" id="password" name="password" class="border border-slate-300 p-3 rounded-md focus:ring-2 focus:ring-sky-500 focus:outline-none">
        <span id="password_error" class="text-red-500 text-sm mt-1 hidden">Password must be at least 6 characters.</span>
      </div>
      
      <!-- House Number -->
      <div class="flex flex-col">
        <label for="house_no" class="mb-1 text-gray-700">House No</label>
        <input type="text" id="house_no" name="house_no" class="border border-slate-300 p-3 rounded-md focus:ring-2 focus:ring-sky-500 focus:outline-none">
        <span id="house_no_error" class="text-red-500 text-sm mt-1 hidden">This field is required.</span>
      </div>

      <!-- Street -->
      <div class="flex flex-col">
        <label for="street" class="mb-1 text-gray-700">Street</label>
        <input type="text" id="street" name="street" class="border border-slate-300 p-3 rounded-md focus:ring-2 focus:ring-sky-500 focus:outline-none">
        <span id="street_error" class="text-red-500 text-sm mt-1 hidden">This field is required.</span>
      </div>

      <!-- Upazila -->
      <div class="flex flex-col">
        <label for="upazila" class="mb-1 text-gray-700">Upazila</label>
        <input type="text" id="upazila" name="upazila" class="border border-slate-300 p-3 rounded-md focus:ring-2 focus:ring-sky-500 focus:outline-none">
        <span id="upazila_error" class="text-red-500 text-sm mt-1 hidden">This field is required.</span>
      </div>

      <!-- District -->
      <div class="flex flex-col">
        <label for="district" class="mb-1 text-gray-700">District</label>
        <input type="text" id="district" name="district" class="border border-slate-300 p-3 rounded-md focus:ring-2 focus:ring-sky-500 focus:outline-none">
        <span id="district_error" class="text-red-500 text-sm mt-1 hidden">This field is required.</span>
      </div>

      <!-- City -->
      <div class="flex flex-col">
        <label for="city" class="mb-1 text-gray-700">City</label>
        <input type="text" id="city" name="city" class="border border-slate-300 p-3 rounded-md focus:ring-2 focus:ring-sky-500 focus:outline-none">
        <span id="city_error" class="text-red-500 text-sm mt-1 hidden">This field is required.</span>
      </div>

      <!-- Country -->
      <div class="flex flex-col">
        <label for="country" class="mb-1 text-gray-700">Country</label>
        <input type="text" id="country" name="country" class="border border-slate-300 p-3 rounded-md focus:ring-2 focus:ring-sky-500 focus:outline-none">
        <span id="country_error" class="text-red-500 text-sm mt-1 hidden">This field is required.</span>
      </div>

      <!-- Account Type -->
      <div class="flex flex-col">
        <label for="account_type" class="mb-1 text-gray-700">Account Type</label>
        <select id="account_type" name="account_type" class="border border-slate-300 p-3 rounded-md focus:ring-2 focus:ring-sky-500 focus:outline-none">
          <option value="savings">Savings</option>
          <option value="checking">Checking</option>
        </select>
        <span id="account_type_error" class="text-red-500 text-sm mt-1 hidden">Please select an account type.</span>
      </div>

      <!-- Balance -->
      <div class="flex flex-col">
        <label for="balance" class="mb-1 text-gray-700">Balance</label>
        <input type="text" id="balance" name="balance" class="border border-slate-300 p-3 rounded-md focus:ring-2 focus:ring-sky-500 focus:outline-none">
        <span id="balance_error" class="text-red-500 text-sm mt-1 hidden">Balance must be a valid amount.</span>
      </div>

       <!-- Image -->
      <div class="flex flex-col">
        <label for="image" class="mb-1 text-gray-700">Upload Image</label>
        <input type="file" id="image" name="image" class="border border-slate-300 p-3 rounded-md focus:ring-2 focus:ring-sky-500 focus:outline-none">
        <span id="image_error" class="text-red-500 text-sm mt-1 hidden">Please upload an image.</span>
      </div>

      <!-- Submit Button -->
      <div class="col-span-1 md:col-span-2">
        <button type="submit" name="createAccount" class="w-full bg-sky-500 text-white p-3 rounded-md hover:bg-sky-600 focus:ring-2 focus:ring-sky-500">Create Account</button>
      </div>

    </form>
  </div>
</body>
</html>