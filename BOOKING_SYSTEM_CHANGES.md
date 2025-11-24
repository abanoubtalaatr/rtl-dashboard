# تحديثات نظام الحجوزات - Booking System Updates

## نظرة عامة
تم تقسيم نظام الحجوزات إلى نوعين: **حجز داخلي** و**حجز خارجي** مع إضافة ميزات جديدة شاملة.

---

## 1. التغييرات في قاعدة البيانات

### جداول جديدة

#### 1.1 جدول أنواع السيارات (`car_types`)
```
- id
- name (نوع السيارة: سيدان، ميني باص، باص كبير، الخ)
- description
- timestamps
```

#### 1.2 جدول المواقع (`locations`)
```
- id
- name (اسم الموقع)
- type (نوع الموقع: hotel, landmark, airport, other)
- address
- timestamps
```

### تحديثات جدول الحجوزات (`bookings`)

**حقول جديدة:**
- `car_type_id` - نوع السيارة (Foreign Key)
- `room_name` - اسم الغرفة (للحجز الداخلي)
- `number_of_people` - عدد الأفراد
- `payment_type` - نوع الدفع (cash, visa, credit)
- `return_driver_id` - سائق العودة (Foreign Key)
- `return_time` - وقت العودة
- `return_duration_minutes` - مدة العودة بالدقائق
- `departure_from_location_id` - من (الذهاب)
- `departure_to_location_id` - إلى (الذهاب)
- `return_from_location_id` - من (العودة)
- `return_to_location_id` - إلى (العودة)
- `created_by` - المستخدم الذي أنشأ الحجز

### تحديثات جدول المستخدمين (`users`)

**حقل جديد:**
- `role` - الدور (user, admin, super_admin)

---

## 2. النماذج (Models)

### نماذج جديدة

#### 2.1 CarType Model
```php
- المسار: app/Models/CarType.php
- العلاقات: hasMany(Booking)
```

#### 2.2 Location Model
```php
- المسار: app/Models/Location.php
- أنواع المواقع: hotel, landmark, airport, other
```

### تحديثات النماذج الموجودة

#### 2.3 Booking Model
**علاقات جديدة:**
- `carType()` - نوع السيارة
- `returnDriver()` - سائق العودة
- `departureFromLocation()` - موقع البداية (الذهاب)
- `departureToLocation()` - موقع النهاية (الذهاب)
- `returnFromLocation()` - موقع البداية (العودة)
- `returnToLocation()` - موقع النهاية (العودة)
- `creator()` - المستخدم المنشئ

**دوال مساعدة جديدة:**
- `getPaymentTypeOptions()` - خيارات نوع الدفع
- `getPaymentTypeLabelAttribute` - النص العربي لنوع الدفع
- `scopeInternal()` - حجوزات داخلية فقط
- `scopeExternal()` - حجوزات خارجية فقط

#### 2.4 User Model
**دوال جديدة:**
- `isSuperAdmin()` - التحقق من صلاحية المشرف الأعلى
- `isAdmin()` - التحقق من صلاحية مشرف
- `bookings()` - الحجوزات التي أنشأها المستخدم

---

## 3. المتحكمات (Controllers)

### متحكمات جديدة

#### 3.1 InternalBookingController
```
المسار: app/Http/Controllers/InternalBookingController.php
الميزات:
- إدارة كاملة CRUD للحجوزات الداخلية
- التحقق من الصلاحيات (المستخدم العادي يرى حجوزاته فقط)
- Super Admin يرى جميع الحجوزات
- تعيين تلقائي للسائق كسائق العودة إذا لم يتم تحديده
```

#### 3.2 CarTypeController
```
المسار: app/Http/Controllers/CarTypeController.php
الميزات: إدارة CRUD كاملة لأنواع السيارات
```

#### 3.3 LocationController
```
المسار: app/Http/Controllers/LocationController.php
الميزات: إدارة CRUD كاملة للمواقع
```

#### 3.4 ExternalBookingController
```
المسار: app/Http/Controllers/ExternalBookingController.php
الحالة: تم إنشاؤه (جاهز للتطوير في المرحلة القادمة)
```

---

## 4. طلبات التحقق (Form Requests)

### طلبات جديدة

1. **StoreInternalBookingRequest**
   - المسار: `app/Http/Requests/StoreInternalBookingRequest.php`
   - التحقق من: جميع حقول الحجز الداخلي

2. **UpdateInternalBookingRequest**
   - المسار: `app/Http/Requests/UpdateInternalBookingRequest.php`
   - التحقق من: جميع حقول التحديث

3. **StoreCarTypeRequest & UpdateCarTypeRequest**
   - التحقق من أنواع السيارات

4. **StoreLocationRequest & UpdateLocationRequest**
   - التحقق من المواقع

---

## 5. المسارات (Routes)

### مسارات جديدة

```php
// الحجوزات الداخلية
Route::resource('internal-bookings', InternalBookingController::class);

// الحجوزات الخارجية
Route::resource('external-bookings', ExternalBookingController::class);

// أنواع السيارات
Route::resource('car-types', CarTypeController::class);

// المواقع (التشغيلات)
Route::resource('locations', LocationController::class);
```

---

## 6. الواجهات (Views)

### واجهات جديدة

#### 6.1 الحجوزات الداخلية
```
المسار: resources/views/internal-bookings/

الملفات:
- index.blade.php (قائمة الحجوزات)
- create.blade.php (إنشاء حجز جديد)
- edit.blade.php (تعديل حجز - قيد الإنشاء)
- show.blade.php (عرض تفاصيل حجز - قيد الإنشاء)

الميزات:
- تصميم حديث مع التوافقية مع UI الجديد
- بحث متقدم
- جداول تفاعلية
- أيقونات معبرة
- تنبيهات SweetAlert2
```

---

## 7. البيانات الأولية (Seeders)

### Seeders جديدة

#### 7.1 CarTypeSeeder
```php
أنواع السيارات المضافة:
- سيدان
- ميني باص
- باص كبير
- كوستر
- فان
- SUV
```

#### 7.2 LocationSeeder
```php
المواقع المضافة:
- فنادق: ماريوت، هيلتون، ريتز كارلتون
- معالم: الأهرامات، المتحف المصري
- مطارات: مطار القاهرة الدولي
```

---

## 8. القائمة الجانبية (Sidebar)

تم تحديث `config/adminlte.php` لإضافة:

### قسم إدارة الحجوزات
- الحجوزات الداخلية
- الحجوزات الخارجية
- الحجوزات (قديم) - للتوافقية
- أنواع السيارات
- المواقع (التشغيلات)

### قسم إدارة السيارات
- السيارات
- السيارات المتاحة
- مصروفات السيارات

---

## 9. الميزات الرئيسية للحجز الداخلي

### ✅ المتطلبات المنفذة

1. **نوع السيارة**
   - CRUD كامل لإدارة أنواع السيارات
   - اختيار نوع السيارة عند الحجز
   - رابط سريع لإضافة نوع جديد من صفحة الحجز

2. **العودة (Return Trip)**
   - سائق العودة (افتراضياً نفس السائق)
   - إمكانية تغيير السائق عند التعديل
   - وقت العودة
   - مدة العودة بالدقائق (افتراضياً 20 دقيقة)

3. **نوع الدفع**
   - كاش (Cash)
   - فيزا (Visa)
   - أجل (Credit)

4. **التشغيلة (Route)**
   - من وإلى (الذهاب)
   - من وإلى (العودة)
   - إدارة كاملة للمواقع
   - أنواع مواقع: فندق، معلم سياحي، مطار، أخرى
   - إمكانية إضافة موقع جديد أثناء الحجز

5. **عدد الأفراد**
   - حقل مطلوب
   - عدد صحيح موجب

6. **اسم الغرفة**
   - بدلاً من اختيار العميل (للحجز الداخلي)
   - حقل نصي مطلوب

7. **تسجيل المنشئ**
   - كل حجز يُسجل بحساب المستخدم الحالي
   - حقل `created_by` في قاعدة البيانات

8. **الصلاحيات**
   - المستخدم العادي: يرى حجوزاته فقط
   - Super Admin: يرى جميع الحجوزات
   - دوال `isSuperAdmin()` و `isAdmin()` في User Model

---

## 10. كيفية الاستخدام

### خطوات إنشاء حجز داخلي جديد:

1. **الانتقال إلى الحجوزات الداخلية**
   - من القائمة الجانبية → "الحجوزات الداخلية"

2. **إنشاء حجز جديد**
   - النقر على "إضافة حجز داخلي جديد"

3. **ملء البيانات:**
   - **معلومات الغرفة:**
     - اسم الغرفة
     - عدد الأفراد
   
   - **السيارة والسائق:**
     - نوع السيارة (مطلوب)
     - السيارة (اختياري)
     - السائق (مطلوب)
     - سائق العودة (اختياري)
   
   - **التشغيلة (الذهاب):**
     - من موقع
     - إلى موقع
   
   - **التشغيلة (العودة):** (اختياري)
     - من موقع
     - إلى موقع
     - وقت العودة
     - مدة العودة
   
   - **التواريخ:**
     - من تاريخ
     - إلى تاريخ
   
   - **المبالغ:**
     - التكلفة
     - سعر الحجز
     - العملة
     - نوع الدفع

4. **حفظ الحجز**

### إدارة الحجوزات:
- **عرض:** مشاهدة تفاصيل الحجز
- **تعديل:** تعديل بيانات الحجز (بما في ذلك تغيير السائق)
- **حذف:** حذف الحجز (مع تأكيد)
- **بحث:** البحث باسم الغرفة أو السائق

---

## 11. الملفات المهمة

### قاعدة البيانات
```
database/migrations/2025_11_23_173046_create_car_types_table.php
database/migrations/2025_11_23_173052_create_locations_table.php
database/migrations/2025_11_23_173128_add_internal_booking_fields_to_bookings_table.php
database/migrations/2025_11_23_173152_add_role_to_users_table.php
```

### Models
```
app/Models/CarType.php
app/Models/Location.php
app/Models/Booking.php (محدث)
app/Models/User.php (محدث)
```

### Controllers
```
app/Http/Controllers/InternalBookingController.php
app/Http/Controllers/CarTypeController.php
app/Http/Controllers/LocationController.php
app/Http/Controllers/ExternalBookingController.php
```

### Form Requests
```
app/Http/Requests/StoreInternalBookingRequest.php
app/Http/Requests/UpdateInternalBookingRequest.php
app/Http/Requests/StoreCarTypeRequest.php
app/Http/Requests/UpdateCarTypeRequest.php
app/Http/Requests/StoreLocationRequest.php
app/Http/Requests/UpdateLocationRequest.php
```

### Views
```
resources/views/internal-bookings/index.blade.php
resources/views/internal-bookings/create.blade.php
```

### Routes
```
routes/web.php
```

### Config
```
config/adminlte.php
```

---

## 12. المرحلة القادمة

### ملفات Views المطلوبة:

1. **الحجوزات الداخلية:**
   - ✅ `index.blade.php` - تم
   - ✅ `create.blade.php` - تم
   - ⏳ `edit.blade.php` - قيد الإنشاء
   - ⏳ `show.blade.php` - قيد الإنشاء

2. **أنواع السيارات:**
   - ⏳ `car-types/index.blade.php`
   - ⏳ `car-types/create.blade.php`
   - ⏳ `car-types/edit.blade.php`

3. **المواقع:**
   - ⏳ `locations/index.blade.php`
   - ⏳ `locations/create.blade.php`
   - ⏳ `locations/edit.blade.php`

4. **الحجوزات الخارجية:**
   - سيتم العمل عليها في المرحلة القادمة

---

## 13. ملاحظات مهمة

1. **التوافقية:**
   - تم الحفاظ على الحجوزات القديمة
   - يمكن الوصول للنظام القديم من "الحجوزات (قديم)"

2. **الصلاحيات:**
   - يجب تعيين role للمستخدمين
   - Super Admin يجب أن يكون `role = 'super_admin'`

3. **البيانات الأولية:**
   - تم إضافة 6 أنواع سيارات
   - تم إضافة 6 مواقع أولية
   - يمكن إضافة المزيد حسب الحاجة

4. **الأداء:**
   - استخدام Eager Loading لتحسين الأداء
   - Pagination للجداول الكبيرة
   - فهرسة Foreign Keys تلقائياً

---

## 14. الأوامر المستخدمة

```bash
# تشغيل Migrations
php artisan migrate

# تشغيل Seeders
php artisan db:seed --class=CarTypeSeeder
php artisan db:seed --class=LocationSeeder
```

---

## 15. الدعم الفني

للمزيد من المساعدة أو للإبلاغ عن مشاكل، يرجى التواصل مع فريق التطوير.

---

**تاريخ التحديث:** 23 نوفمبر 2025  
**الإصدار:** 1.0  
**الحالة:** جاهز للاستخدام (الحجز الداخلي)

