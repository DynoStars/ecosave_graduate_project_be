<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Carbon\Carbon;

class ProductSeeder extends Seeder
{
    public function run()
    {

        // Thêm dữ liệu thật
        $products = [
            [
                'id' => 1,
                'name' => 'Nạm bò 365 Fresh 300g',
                'description' => 'Nạm bò là phần thịt bên sườn của con bò, có nhiều nạc và gân, đây được xem là một trong những phần thịt ngon nhất của con bò. Nạm bò được chế biến thành khá nhiều món tuy nhiên phổ biến nhất vẫn là món phở nạm bò.
Thịt bò được lấy từ những con bò khỏe mạnh, quy trình lấy thịt đảm bảo vệ sinh an toàn thực phẩm, quy trình đóng gói sạch sẽ khi đến tay người tiêu dùng.
Nạm bò chứa rất nhiều các chất dinh dưỡng tốt cho cơ thể con người như sắt, kẽm, kali, các axit amin, các vitamin nhóm B (B2, B6, B12)…',
                'original_price' => 74700,
                'discount_percent' => 14,
                'discounted_price' => 64500,
                'product_type' => 'store_selling',
                'stock_quantity' => 10,
                'store_id' => 1,
                'category_id' => 1,
                'expiration_date' => Carbon::createFromFormat('d/m/Y', '30/03/2025')->format('Y-m-d'),
                'rating' => 5.0,
                'origin' => 'Việt Nam',
                'ingredients' => null,
                'usage_instructions' => 'Rã đông, rửa sạch. Chế biến tùy sở thích',
                'storage_instructions' => 'Bảo quản trong ngăn đông tủ lạnh từ -17 đến -18 độ C. Trong môi trường ngăn mát (từ 1 – 3 độ C) thịt bảo quản được khoảng 24 tiếng',
            ],
            [
                'id' => 2,
                'name' => 'MEATDELI [PRE] Thịt Ba Rọi đặc biệt (S)',
                'description' => 'Thịt MEAT DELI [PREMIUM] Ba rọi đặc biệt (S)
Những dây ba rọi nạc mỡ hài hòa, rõ đều tăm tắp được tuyển chọn từ các tảng thịt MEATDeli ngon nhất và khéo léo pha lóc bởi các chuyên gia giàu kinh nghiệm. Với thớ thịt hồng tươi, căng mọng, MEATDeli Ba rọi Premium là nguyên liệu hảo hạng cho các món ngon đúng điệu.

Thịt MEAT DELI là sản phẩm có nguồn gốc xuất xứ rõ ràng, được chăn nuôi theo hướng công nghiệp sạch, đảm bảo an toàn cho người sử dụng. Thịt được chế biến trên công nghệ dây chuyền Châu Âu, sạch sẽ từ khâu chế biến đến khâu, đóng gói. Tất cả đều đảm bảo vệ sinh an toàn thực phẩm, mang đến cho người tiêu dùng sản phẩm có chất lượng tốt nhất.',
                'original_price' => 132836,
                'discount_percent' => 20,
                'discounted_price' => 106269,
                'product_type' => 'store_selling',
                'stock_quantity' => 5,
                'store_id' => 2,
                'category_id' => 1,
                'expiration_date' => Carbon::createFromFormat('d/m/Y', '30/03/2025')->format('Y-m-d'),
                'rating' => 5.0,
                'origin' => 'Việt Nam',
                'ingredients' => null,
                'usage_instructions' => null,
                'storage_instructions' => '- Nhiệt độ thích hợp để bảo quản thịt ngăn ngừa sự xâm nhập của vi khuẩn: ở ngăn mát là khoảng 2°C và ngăn đá là âm 25°C. Với các bảo quản trên có thể sử dụng thịt lợn tươi trong vòng 3 – 4 ngày trong ngăn mát và khoảng 2 tháng khi bảo quản trong ngăn đông',
            ],
            [
                'id' => 3,
                'name' => 'MEATDELI [PRE] Thịt heo xay đặc biệt',
                'description' => 'MEATDeli Thịt heo xay đặc biệt (S)
Thịt heo xay MEATDeli PREMIUM giữ trọn vị trươi ngọt của thịt với tỉ lệ 90% nạc - 10% mỡ, phù hợp với người thích ăn ít mỡ và nấu các món ăn thanh mát. Thịt nạc heo ngon được xay theo công nghệ hiện đại, đảm bảo độ tươi sạch và giữ trọn vị ngọt thịt tự nhiên.',
                'original_price' => 71957,
                'discount_percent' => 20,
                'discounted_price' => 57566,
                'product_type' => 'store_selling',
                'stock_quantity' => 7,
                'store_id' => 2,
                'category_id' => 1,
                'expiration_date' => Carbon::createFromFormat('d/m/Y', '30/03/2025')->format('Y-m-d'),
                'rating' => 5.0,
                'origin' => 'Việt Nam',
                'ingredients' => null,
                'usage_instructions' => 'Dùng làm nguyên liệu chế biến các món ăn tùy thích',
                'storage_instructions' => 'Bảo quản ở nhiệt độ 0 - 4 độ C',
            ],
            [
                'id' => 4,
                'name' => 'Cá Hồi Na Uy Phi Lê Tươi Không Da 330G',
                'description' => 'Cá hồi là một loại cá rất tốt và giàu dinh dưỡng cho sức khỏe của mọi gia đình nhất là đối với trẻ nhỏ và phụ nữ mang thai. Cá hồi cung cấp nhiều lợi ích, một chế độ ăn giàu omega-3 axit béo không bão hòa.

Cá hồi Na Uy được nuôi trong môi trường tự nhiên, trong những lồng lưới lớn nằm ngoài khơi, có tỷ lệ 97,5% nước và 2,5% cá. Điều này giúp cá hồi có đủ không gian để bơi lội và phát triển khỏe mạnh. Cá hồi Na Uy được nuôi theo những tiêu chuẩn cao về an toàn và bền vững.

Omega-3 có trong cá hồi còn giúp phòng ngừa các bệnh. Ngoài ra cá hồi còn chứa rất nhiều nguồn dinh dưỡng khác như protein, canxi, photpho và vitamin D.

Phần phi lê đuôi có thể chế biến được rất nhiều món ăn đều vô cùng thơm ngon như món cá hồi chiên, nướng, sushi ăn sống hoặc cá hồi sốt các kiểu. Có thể làm ruốc chà bông từ thịt.',
                'original_price' => 220770,
                'discount_percent' => 23,
                'discounted_price' => 170000,
                'product_type' => 'store_selling',
                'stock_quantity' => 15,
                'store_id' => 1,
                'category_id' => 2,
                'expiration_date' => Carbon::createFromFormat('d/m/Y', '31/03/2025')->format('Y-m-d'),
                'rating' => 5.0,
                'origin' => 'Norway',
                'ingredients' => null,
                'usage_instructions' => 'Chế biến tùy thích',
                'storage_instructions' => 'Bảo quản trong ngăn đông tủ lạnh từ -17 đến -18 độ C. Trong môi trường ngăn mát (từ 1 – 3 độ C) thịt bảo quản được khoảng 24 tiếng',
            ],
            [
                'id' => 5,
                'name' => 'Cá hồi Coho cắt khúc nhập khẩu Chi Lê (chỉ giao khúc giữa)',
                'description' => 'Cá hồi Coho Chile được nhập khẩu chính ngạch. Cá được làm sạch đầu, nội tạng và cấp đông sâu khi còn tươi để giữ được giá trị dinh dưỡng và hương vị.',
                'original_price' => 139800,
                'discount_percent' => 43,
                'discounted_price' => 79800,
                'product_type' => 'store_selling',
                'stock_quantity' => 3,
                'store_id' => 3,
                'category_id' => 2,
                'expiration_date' => Carbon::createFromFormat('d/m/Y', '31/03/2025')->format('Y-m-d'),
                'rating' => 4.0,
                'origin' => 'Chi Lê',
                'ingredients' => null,
                'usage_instructions' => 'Chế biến tùy thích',
                'storage_instructions' => 'Bảo quản ở nhiệt độ 0 - 4 độ C',
            ],
            [
                'id' => 6,
                'name' => 'Cá chốt làm sạch 500g (50-70 con)',
                'description' => 'Cá chốt nhiều nơi gọi là cá ngạnh, cá gai có thân dẹp bên, đầu nhỏ hình nón với bốn đôi râu, toàn thân ánh lên màu vàng nghệ. Thịt cá chốt ngon ngọt, săn chắc, dễ dàng nấu nhiều món ăn dân dã, hấp dẫn. Cá chốt là thực phẩm lành mạnh và cung cấp nhiều chất dinh dưỡng có lợi cho sức khỏe con người.
Trong cá có chứa hàm lượng protein khá cao, cho đặc biệt là chất béo omega-3 – một loại axit béo lành mạnh mà cơ thể chúng ta không thể tự sản xuất ra được.',
                'original_price' => 69000,
                'discount_percent' => 20,
                'discounted_price' => 55000,
                'product_type' => 'store_selling',
                'stock_quantity' => 20,
                'store_id' => 3,
                'category_id' => 2,
                'expiration_date' => Carbon::createFromFormat('d/m/Y', '31/03/2025')->format('Y-m-d'),
                'rating' => 5.0,
                'origin' => 'Việt Nam',
                'ingredients' => null,
                'usage_instructions' => 'Chế biến tùy thích',
                'storage_instructions' => 'Bảo quản ở nhiệt độ 0 - 4 độ C',
            ],
            [
                'id' => 7,
                'name' => 'Trứng gà Ba Huân hộp 10 quả (ea)',
                'description' => 'Trứng gà là loại thức ăn có giá trị dinh dưỡng cao. Trong trứng có đủ chất đạm, chất béo, Vitamin, chất khoáng, các men và hormone.

Tỷ lệ các chất dinh dưỡng trong trứng tương quan với nhau rất thích hợp và cân đối. Chất đạm trong lòng đỏ trứng có thành phần các acid amin tốt nhất và toàn diện nhất.

Sản phẩm trứng gia cầm Ba Huân được xử lý trên thiết bị hiện đại nhất hiện nay trên thế giới, trong đó có 2 công đoạn quan trọng là chiếu UV diệt khuẩn và làm se khít các lỗ thông khí, tránh sự xâm nhập của vi khuẩn và tạp chất vào bên trong trứng.

Trứng gà là thực phẩm dễ dàng chế biến thành nhiều món ngon, vừa bổ dưỡng vừa tiện lợi cho bữa ăn của gia đình bạn.',
                'original_price' => 37500,
                'discount_percent' => 22,
                'discounted_price' => 25000,
                'product_type' => 'store_selling',
                'stock_quantity' => 18,
                'store_id' => 1,
                'category_id' => 3,
                'expiration_date' => Carbon::createFromFormat('d/m/Y', '15/04/2025')->format('Y-m-d'),
                'rating' => 5.0,
                'origin' => 'Việt Nam',
                'ingredients' => null,
                'usage_instructions' => 'Có thể dễ dàng chế biến thành nhiều món ăn ngon miệng như: trứng rán, trứng kho thịt, hay dùng làm súp, cuốn nem, làm bánh… mang lại nhiều món ăn ngon, bổ dưỡng cho cả gia đình.',
                'storage_instructions' => 'Nếu được bảo quản lạnh thì hạn sử dụng trứng sẽ lâu hơn',
            ],
            [
                'id' => 8,
                'name' => 'Trứng cút VFood loại 1 hộp 30 quả 300g (ea)',
                'description' => 'Trứng cút là loại thực phẩm rất giàu dinh dưỡng và các vitamin. Mỗi quả trứng cút có trọng lượng khoảng từ 10-12g, nhỏ hơn trứng gà 5 lần. Nhưng vitamin A trong một quả trứng cút nhiều hơn trong trứng gà 2,5 lần. Lần lượt hàm lượng B1 và B2 cũng cao hơn tương ứng 2,8 và 2,2 lần. Phốt pho, cali, sắt trong trứng cút cao hơn trứng gà gấp 5 lần. Thêm vào đó, trứng cút cũng rất giàu chất các chất như đồng, coban, niacin và các axit amin thiết yếu. Tyrosine là loại dưỡng chất có khả năng làm cho da khỏe mạnh.',
                'original_price' => 29300,
                'discount_percent' => 33,
                'discounted_price' => 24900,
                'product_type' => 'store_selling',
                'stock_quantity' => 12,
                'store_id' => 2,
                'category_id' => 3,
                'expiration_date' => Carbon::createFromFormat('d/m/Y', '15/04/2025')->format('Y-m-d'),
                'rating' => 5.0,
                'origin' => 'Việt Nam',
                'ingredients' => null,
                'usage_instructions' => 'Chế biến tùy theo nhu cầu và sở thích.',
                'storage_instructions' => 'Bảo quản nơi khô ráo, thoáng mát, tránh ánh nắng mặt trời.',
            ],
            [
                'id' => 9,
                'name' => 'Trứng vịt muối Ba Huân hộp 4 quả (ea)',
                'description' => 'Trứng vịt muối là loại trứng được làm bằng cách ngâm trứng vịt trong nước muối, trứng có vị mặn lòng đỏ trứng có vị thật ngon và béo. Ngoài các nguồn vitamin A, B, D, E dồi dào, trứng vịt muối còn bao gồm các axit béo hữu ích DHA, EPA, ALA. Trong đó DHA giúp phát triển trí não và thị lực, làm chậm sự lão hoá não, ngăn ngừa suy giảm trí nhớ, EPA tốt đối với việc phòng ngừa các bệnh tim mạch, giảm cholesterol xấu, ALA cần thiết cho sự phát triển hoàn thiện tế bào thần kinh của thai nhi. Sản phẩm được diệt khuẩn bằng công nghệ UV hiện đại hàng đầu châu Âu đem lại sự yên tâm cho người sử dụng',
                'original_price' => 28000,
                'discount_percent' => 15,
                'discounted_price' => 24000,
                'product_type' => 'store_selling',
                'stock_quantity' => 10,
                'store_id' => 3,
                'category_id' => 3,
                'expiration_date' => Carbon::createFromFormat('d/m/Y', '15/04/2025')->format('Y-m-d'),
                'rating' => 4.0,
                'origin' => 'Việt Nam',
                'ingredients' => null,
                'usage_instructions' => 'Trứng vịt muối bạn có thể dễ dàng chế biến thành nhiều món ăn ngon miệng như: đậu hũ luộc trứng muối, cháo trắng trứng muối, thịt hấp lòng đỏ trứng muối... mang lại hương vị mới cho bữa ăn thêm phần hấp dẫn.',
                'storage_instructions' => 'Bảo quản nơi khô ráo, thoáng mát, tránh ánh nắng mặt trời.',
            ],
            [
                'id' => 10,
                'name' => 'Dâu Tây Hàn Quốc Hộp 250G (ea)',
                'description' => 'Dâu tây nhập khẩu Hàn Quốc sở hữu màu đỏ tươi quyến rũ, quả rất to, thịt dày, vị ngọt thanh, mọng nước, chỉ cần cắn một miếng đủ nhớ mãi hương thơm dịu dàng của loại quả đỏ mọng này.',
                'original_price' => 179000,
                'discount_percent' => 22,
                'discounted_price' => 139000,
                'product_type' => 'store_selling',
                'stock_quantity' => 5,
                'store_id' => 1,
                'category_id' => 4,
                'expiration_date' => Carbon::createFromFormat('d/m/Y', '30/03/2025')->format('Y-m-d'),
                'rating' => 5.0,
                'origin' => 'Hàn Quốc',
                'ingredients' => null,
                'usage_instructions' => 'Dùng trực tiếp hoặc chế biến các món tráng miệng.',
                'storage_instructions' => 'Bảo quản ở ngăn mát tủ lạnh.',
            ],
            [
                'id' => 11,
                'name' => 'Táo Ninh Thuận 500g (25-33 trái/kg)',
                'description' => 'Táo gió - đặc sản nổi tiếng của vùng đất Ninh Thuận · Ngăn ngừa thiếu máu · Cải thiện khả năng miễn dịch · Tăng cường năng lượng cho cơ thể.',
                'original_price' => 17000,
                'discount_percent' => 35,
                'discounted_price' => 11000,
                'product_type' => 'store_selling',
                'stock_quantity' => 8,
                'store_id' => 3,
                'category_id' => 4,
                'expiration_date' => Carbon::createFromFormat('d/m/Y', '31/03/2025')->format('Y-m-d'),
                'rating' => 5.0,
                'origin' => 'Việt Nam',
                'ingredients' => null,
                'usage_instructions' => 'Ngon hơn khi ướp đá',
                'storage_instructions' => 'Bảo quản ở ngăn mát tủ lạnh.',
            ],
            [
                'id' => 12,
                'name' => 'Thùng táo Story mini Pháp 2.5kg',
                'description' => 'Táo Story giống Pháp có hình dáng tròn đều, lớp vỏ mịn màng với sắc đỏ quyến rũ xen lẫn ánh vàng tự nhiên. Phần thịt quả trắng ngọt.',
                'original_price' => 147500,
                'discount_percent' => 36,
                'discounted_price' => 95000,
                'product_type' => 'store_selling',
                'stock_quantity' => 3,
                'store_id' => 2,
                'category_id' => 4,
                'expiration_date' => Carbon::createFromFormat('d/m/Y', '09/04/2025')->format('Y-m-d'),
                'rating' => 5.0,
                'origin' => 'Pháp',
                'ingredients' => null,
                'usage_instructions' => 'Ngon hơn khi ướp đá',
                'storage_instructions' => 'Bảo quản ở ngăn mát tủ lạnh.',
            ],
            [
                'id' => 13,
                'name' => 'Xúc xích Mỹ Le Gourmet gói 500g',
                'description' => 'Xúc xích Le Gourmet sử dụng nguồn nguyên liệu thực phẩm tươi sạch, công nghệ an toàn vệ sinh. Mua Xúc xích Mỹ Le Gourmet gói 500g với công thức tẩm ướp đặc biệt, là loại xúc xích dễ dàng chế biến như chiên, hoặc chế biến thành nhiều món ăn.',
                'original_price' => 72000,
                'discount_percent' => 33,
                'discounted_price' => 48000,
                'product_type' => 'store_selling',
                'stock_quantity' => 20,
                'store_id' => 3,
                'category_id' => 5,
                'expiration_date' => Carbon::createFromFormat('d/m/Y', '20/04/2025')->format('Y-m-d'),
                'rating' => 5.0,
                'origin' => 'Mỹ',
                'ingredients' => null,
                'usage_instructions' => 'Ăn liền, chiên hấp, lò viba hoặc chế biến các món ăn tuỳ thích',
                'storage_instructions' => 'Bảo quản ở ngăn đông hoặc mát tủ lạnh.',
            ],
            [
                'id' => 14,
                'name' => 'Bánh pizza 3 loại thịt phô mai Kitkool hộp 140g',
                'description' => 'Pizza Kitkool là thương hiệu bánh pizza rất nổi tiếng tại Việt Nam, đa dạng sản phẩm. Bánh pizza 3 loại thịt phô mai Kitkool hộp 140g từ nguyên liệu tươi ngon, đế bánh mỏng, nhân 3 loại thịt xốt phô mai cực thơm ngon, vừa miệng, giàu dinh dưỡng, chế biến nhanh chóng.',
                'original_price' => 36000,
                'discount_percent' => 50,
                'discounted_price' => 15000,
                'product_type' => 'store_selling',
                'stock_quantity' => 5,
                'store_id' => 1,
                'category_id' => 5,
                'expiration_date' => Carbon::createFromFormat('d/m/Y', '20/04/2025')->format('Y-m-d'),
                'rating' => 5.0,
                'origin' => 'Việt Nam',
                'ingredients' => null,
                'usage_instructions' => 'Lò nướng - Bật lò nướng khoảng 5 phút cho nhiệt độ khoảng 220 - 250 độ C. Để bánh lên khay nướng khoảng 5 - 8 phút. Đến khi phô mai tan chảy, viền bánh có màu vàng nâu là hoàn thành. Áp chảo - Cho 1 ít dầu ăn cho bánh vào chảo và đậy nắp áp chảo khoảng 10 - 15 phút, đến khi phô mai chảy.',
                'storage_instructions' => 'Bảo quản dưới -18 độ C hoặc ngăn đá tủ lạnh.',
            ],
            [
                'id' => 15,
                'name' => 'Bánh bao nhân thịt heo trứng cút La Cusina 400g',
                'description' => 'Bánh bao nhân thịt heo trứng cút thơm ngon, hấp dẫn, kích thích vị giác, thuận tiện cho việc nấu nướng. Bánh bao La Cusina luôn mang đến cho người tiêu dùng nhiều sự lựa chọn hấp dẫn mà còn an toàn, chất lượng. Bánh bao nhân thịt heo trứng cút La Cusina gói 400g đong đầy hương vị truyền thống.',
                'original_price' => 37000,
                'discount_percent' => 14,
                'discounted_price' => 32000,
                'product_type' => 'store_selling',
                'stock_quantity' => 7,
                'store_id' => 2,
                'category_id' => 5,
                'expiration_date' => Carbon::createFromFormat('d/m/Y', '20/04/2025')->format('Y-m-d'),
                'rating' => 5.0,
                'origin' => 'Việt Nam',
                'ingredients' => null,
                'usage_instructions' => 'Chiên - Cho dầu vào chảo đun nóng, đợi dầu sôi thì cho bánh vào chiên cho vàng giòn thì vớt ra. Nướng - Cho bánh vào lò vi sóng khoảng 2 - 3 phút. Hấp - Cho bánh vào xửng hoặc nồi cơm điện hấp cách thủy khoảng 15 - 20 phút. Thưởng thức ngay khi còn nóng.',
                'storage_instructions' => 'Bảo quản dưới -18 độ C hoặc ngăn đá tủ lạnh.',
            ],
            [
                'id' => 16,
                'name' => 'Bí đỏ cắt sẵn 350g (ea)',
                'description' => 'Bí đỏ cắt sẵn được sơ chế, cắt sẵn và đóng khay tiện dụng, cho người nội trợ dễ dàng chế biến món canh bí đỏ mà không tốn quá nhiều thời gian. Thành phần: Bí đỏ, rau ôm, ngò gai, ớt hiểm. Bí đỏ là loại quả rất giàu dinh dưỡng.
Bí đỏ cung cấp cho cơ thể một lượng lớn các khoáng chất sắt, kẽm giúp đẩy nhanh quá trình tạo máu và huyết tố cầu, từ đó phòng ngừa thiếu máu và xơ vữa động mạch. Ngoài ra, các dưỡng chất khác trong bí đỏ như beta carotene, gluxit, protit, tirozin, fitin, axit salixilic, các axit béo và các nguyên tố vi lượng cũng vô cùng cần thiết cho sự khỏe mạnh của cơ thể.
Sản phẩm đạt tiêu chuẩn VietGAP, không chứa các hóa chất, chất kích thích tăng trưởng gây hại, đảm bảo an toàn cho sức khỏe người tiêu dùng. Do đó, bạn hoàn toàn có thể an tâm khi lựa chọn sản phẩm này trong mỗi bữa ăn của gia đình mình, giúp bữa ăn trở nên ngon miệng hơn.',
                'original_price' => 15900,
                'discount_percent' => 37,
                'discounted_price' => 10000,
                'product_type' => 'store_selling',
                'stock_quantity' => 2,
                'store_id' => 1,
                'category_id' => 6,
                'expiration_date' => Carbon::createFromFormat('d/m/Y', '30/03/2025')->format('Y-m-d'),
                'rating' => 4.5,
                'origin' => 'Việt Nam',
                'ingredients' => null,
                'usage_instructions' => 'Rửa sạch trước khi chế biến.',
                'storage_instructions' => 'Bảo quản ở ngăn mát tủ lạnh.',
            ],
            [
                'id' => 17,
                'name' => 'Bibigo Kim Chi Ít Cay 500g',
                'description' => 'Bibigo Kim Chi Ít Cay 500g',
                'original_price' => 47500,
                'discount_percent' => 21,
                'discounted_price' => 37500,
                'product_type' => 'store_selling',
                'stock_quantity' => 8,
                'store_id' => 2,
                'category_id' => 6,
                'expiration_date' => Carbon::createFromFormat('d/m/Y', '21/05/2025')->format('Y-m-d'),
                'rating' => 5.0,
                'origin' => 'Hàn Quốc',
                'ingredients' => null,
                'usage_instructions' => 'Ăn theo tùy sở thích.',
                'storage_instructions' => 'Bảo quản ở ngăn mát tủ lạnh.',
            ],
            [
                'id' => 18,
                'name' => 'Hỗn Hợp Su Su Cà Rốt Xào Trường An Khay 300g (ea)',
                'description' => 'Hỗn Hợp Su Su Cà Rốt Xào Trường An Khay 300g được sơ chế, bào sạch và đóng khay tiện dụng, cho người nội trợ dễ dàng chế biến món hỗn hợp su su cà rốt xào mà không tốn quá nhiều thời gian. Thành phần: cà rốt, su su, ớt, rau thơm,...
Dùng nấu canh, xào ngọt thơm, thanh mát và giá trị dinh dưỡng cao. Sản phẩm được làm sẵn, đơn giản tiện lợi thích hợp cho gia đình bận rộn không có thời gian.',
                'original_price' => 17500,
                'discount_percent' => 17,
                'discounted_price' => 14500,
                'product_type' => 'store_selling',
                'stock_quantity' => 4,
                'store_id' => 3,
                'category_id' => 6,
                'expiration_date' => Carbon::createFromFormat('d/m/Y', '31/03/2025')->format('Y-m-d'),
                'rating' => 5.0,
                'origin' => 'Việt Nam',
                'ingredients' => null,
                'usage_instructions' => 'Xào hoặc nấu canh',
                'storage_instructions' => 'Bảo quản ở ngăn mát tủ lạnh.',
            ],
            [
                'id' => 19,
                'name' => 'Dầu đậu nành Meizan chai 2L',
                'description' => 'Được chiết xuất từ 100% hạt đậu nành được chọn lọc kỹ lưỡng, dầu Đậu Nành nguyên chất Meizan dồi dào các dưỡng chất tự nhiên giúp bảo vệ sức khỏe tim mạch và mang đến những món ăn ngon cho gia đình bạn. Tốt cho trái tim: đa dạng các dưỡng chất tự nhiên Vitamin A, E, Omega 3-6-9 và chất béo không bão hòa giúp giảm nguy cơ mắc các bệnh tim mạch. Công nghệ Châu Âu: Được sản xuất bằng công nghệ tinh chế hiện đại từ Châu Âu, tuân thủ nghiêm ngặt tiêu chuẩn quốc tế về vệ sinh an toàn thực phẩm. An toàn với tiêu chí "4 Không": Không Cholesterol, không chất bảo quản, không chất tạo màu và a-xít béo cấu hình Trans(theo khuyến nghị của FDA)',
                'original_price' => 128900,
                'discount_percent' => 29,
                'discounted_price' => 91900,
                'product_type' => 'store_selling',
                'stock_quantity' => 9,
                'store_id' => 2,
                'category_id' => 7,
                'expiration_date' => Carbon::createFromFormat('d/m/Y', '02/02/2026')->format('Y-m-d'),
                'rating' => 5.0,
                'origin' => 'Việt Nam',
                'ingredients' => null,
                'usage_instructions' => 'Dùng dể chiên, xào, nấu, trộn salad, làm bánh và các món chay.',
                'storage_instructions' => 'Để nơi khô ráo & thoáng mát, tránh ánh nắng trực tiếp.',
            ],
            [
                'id' => 20,
                'name' => 'Nước mắm cá cơm Thuận Phát 40 độ đạm chai 610ml',
                'description' => 'Nước mắm cá cơm Thuận Phát 40 độ đạm chai 610ml được làm từ nguyên liệu cá tươi ngon, qua công đoạn chế biến cầu kỳ, phức tạp, cho ra đời những giọt nước mắm thơm ngon, an toàn để phục vụ người tiêu dùng. Sản phẩm thường được dùng để ướp thịt cá, làm gia vị cho các món kho, xào, nấu hay dùng để chấm các món luộc, rau củ...',
                'original_price' => 82500,
                'discount_percent' => 21,
                'discounted_price' => 64900,
                'product_type' => 'store_selling',
                'stock_quantity' => 10,
                'store_id' => 1,
                'category_id' => 7,
                'expiration_date' => Carbon::createFromFormat('d/m/Y', '02/03/2026')->format('Y-m-d'),
                'rating' => 5.0,
                'origin' => 'Phú Quốc, Việt Nam',
                'ingredients' => null,
                'usage_instructions' => 'Dùng làm nước chấm để chấm thịt, đậu, rau, ướp, chiên, xào.',
                'storage_instructions' => 'Để nơi khô ráo & thoáng mát, tránh ánh nắng trực tiếp.',
            ],
            [
                'id' => 21,
                'name' => 'Hạt nêm Knorr chay nấm hương organic gói 380g',
                'description' => 'Hạt nêm Knorr nấm hương organic 380g được tạo nên từ 100% Nấm Tươi Thái Nguyên, được chứng nhận chuẩn Organic USDA và EU, trở thành người bạn đồng hành hoàn hảo cho mọi nội trợ khi nấu những món rau/chay. Tất cả khiến Knorr Nấm Hương Organic trở thành người bạn đồng hành hoàn hảo cho người nội trợ khi nấu những món rau/chay. Knorr Hạt nêm chay Nấm Hương chính là trợ thủ đắc lực của bạn trong những ngày rằm vì việc nấu những món chay thanh đạm đòi hỏi đầy đủ dưỡng chất và có vị thanh ngọt tự nhiên trở nên dễ dàng hơn.',
                'original_price' => 45000,
                'discount_percent' => 19,
                'discounted_price' => 37100,
                'product_type' => 'store_selling',
                'stock_quantity' => 20,
                'store_id' => 3,
                'category_id' => 7,
                'expiration_date' => Carbon::createFromFormat('d/m/Y', '02/12/2025')->format('Y-m-d'),
                'rating' => 5.0,
                'origin' => 'Việt Nam',
                'ingredients' => null,
                'usage_instructions' => 'Dùng 1 muỗng nhỏ cho món xào (500g nguyên liệu), 2 muỗng nhỏ cho món kho (500g thịt/cá), 3 muỗng nhỏ cho món canh (1 lít nước).',
                'storage_instructions' => 'Để nơi khô ráo & thoáng mát, tránh ánh nắng trực tiếp.',
            ],
            [
                'id' => 22,
                'name' => 'Gạo Dẻo Thơm Neptune Thượng Hạng Nhãn Vàng Túi 5Kg',
                'description' => 'Gạo Dẻo Thơm Thượng Hạng Nhãn Vàng Neptune được sản xuất từ giống lúa ST25 nổi tiếng của Đồng Bằng Sông Cửu Long, đạt Giải Nhất Gạo Ngon Thế Giới 2019.
Đặc tính cơm: Cơm mềm, dẻo và thơm, Hạt cơm khi nấu vẫn nguyên vẹn, không bị nát, Vẫn giữ được độ ngon ngay cả khi để nguội.
Cam kết: KHÔNG chất bảo quản; KHÔNG chất tạo mùi; AN TOÀN dư lượng thuốc bảo vệ thực vật theo quy định của Bộ Y Tế.',
                'original_price' => 210000,
                'discount_percent' => 16,
                'discounted_price' => 175500,
                'product_type' => 'store_selling',
                'stock_quantity' => 18,
                'store_id' => 1,
                'category_id' => 8,
                'expiration_date' => Carbon::createFromFormat('d/m/Y', '02/12/2026')->format('Y-m-d'),
                'rating' => 5.0,
                'origin' => 'Việt Nam',
                'ingredients' => null,
                'usage_instructions' => 'Vo gạo Đong gạo với nước theo tỉ lệ 1:1. Nấu cho cơm chín tới, không mở nắp khi nấu. Sau khi cơm chín, chờ thêm ít nhất 10 phút để cơm ráo. Xới đều cơm, dùng nóng sẽ ngon hơn.',
                'storage_instructions' => 'Để nơi khô ráo & thoáng mát, tránh ánh nắng trực tiếp.',
            ],
            [
                'id' => 23,
                'name' => 'Thùng 30 gói mì ăn liền vị tôm chua cay Reeva gói 65g',
                'description' => 'Mì 3 Miền vị tôm chua cay gói 65g được chế biến và sản xuất bởi thương hiệu Acecook -  - Được thành lập vào ngày 15/12/1993 và chính thức đi vào hoạt động từ năm 1995, sau nhiều năm hoạt động, Công ty Cổ phần Acecook Việt Nam đã không ngừng phát triển lớn mạnh trở thành công ty thực phẩm tổng hợp hàng đầu tại Việt Nam với vị trí vững chắc trên thị trường, chuyên cung cấp các sản phẩm ăn liền có chất lượng và dinh dưỡng cao.',
                'original_price' => 101000,
                'discount_percent' => 24,
                'discounted_price' => 76300,
                'product_type' => 'store_selling',
                'stock_quantity' => 7,
                'store_id' => 2,
                'category_id' => 8,
                'expiration_date' => Carbon::createFromFormat('d/m/Y', '02/12/2025')->format('Y-m-d'),
                'rating' => 4.9,
                'origin' => 'Việt Nam',
                'ingredients' => null,
                'usage_instructions' => 'Cho 350ml nước sôi vào mì và các gói gia vị. Đậy nắp kín trong khoảng 3 phút. Rồi thưởng thức.',
                'storage_instructions' => 'Để nơi khô ráo & thoáng mát, tránh ánh nắng trực tiếp.',
            ],
            [
                'id' => 24,
                'name' => 'Thùng 30 gói mì ăn liền vị tôm chua cay Kokomi 65g',
                'description' => 'Mì gói ăn liền vị tôm chua cay Kokomi 65g với sợi mì dai dẻo, ngay cả khi vô tình để lâu vẫn luôn dai ngon như thường (Mì giữ độ dai 7 phút kể từ khi cho nước sôi vào vắt mì) kết hợp nước súp tôm chua cay đậm đà, đặc trưng làm nên hộp mì chua cay đặc biệt cả nhà đều mê.',
                'original_price' => 91000,
                'discount_percent' => 18,
                'discounted_price' => 74900,
                'product_type' => 'store_selling',
                'stock_quantity' => 9,
                'store_id' => 2,
                'category_id' => 8,
                'expiration_date' => Carbon::createFromFormat('d/m/Y', '02/12/2025')->format('Y-m-d'),
                'rating' => 4.8,
                'origin' => 'Việt Nam',
                'ingredients' => null,
                'usage_instructions' => 'Cho 350ml nước sôi vào mì và các gói gia vị. Đậy nắp kín trong khoảng 3 phút. Rồi thưởng thức.',
                'storage_instructions' => 'Để nơi khô ráo & thoáng mát, tránh ánh nắng trực tiếp.',
            ],
            [
                'id' => 25,
                'name' => 'Tảo cuốn cơm Godbawee 20g*130',
                'description' => 'Tảo cuốn cơm Godbawee gói 20g
Được chế biến từ loại tảo biển nguyên chất 100%, sản phẩm Tảo cuốn cơm Godbawee chắc chắn sẽ mang đến cho bạn nhiều món ăn không chỉ ngon mà còn an toàn với sức khỏe. Tảo cuốn cơm được sản xuất trên dây chuyền công nghệ hiện đại tại Hàn Quốc, cho ra sản phẩm với chất lượng tốt nhất. Bạn có thể sử dụng sản phẩm để chế biến nhiều món ăn, trong đó phải kể đến món cơm cuộn và sushi, đây là hai món ăn rất thích hợp để đổi bữa cho cả gia đình trong những ngày cuối tuần hoặc chuẩn bị cho các chuyến dã ngoại, picnic... Tảo cuốn cơm Godbawee được đóng gói nhỏ gọn, tiện lợi khi sử dụng và dễ dàng bảo quản.',
                'original_price' => 49500,
                'discount_percent' => 28,
                'discounted_price' => 35800,
                'product_type' => 'store_selling',
                'stock_quantity' => 10,
                'store_id' => 3,
                'category_id' => 9,
                'expiration_date' => Carbon::createFromFormat('d/m/Y', '02/08/2025')->format('Y-m-d'),
                'rating' => 4.8,
                'origin' => 'Hàn Quốc',
                'ingredients' => null,
                'usage_instructions' => 'Ăn theo tùy sở thích.',
                'storage_instructions' => 'Để nơi khô ráo & thoáng mát, tránh ánh nắng trực tiếp.',
            ],
            [
                'id' => 26,
                'name' => 'Pate gan hộp Halong Canfoco hộp 170g',
                'description' => 'Pate gan Halong Canfoco hộp 170g là sản phẩm của Hạ Long Canfoco, doanh nghiệp chuyên về lĩnh vực công nghiệp chế biến thực phẩm, với những mặt hàng đóng hộp phổ biến như cá, thịt, rau và trái cây tới các sản phẩm đông lạnh như chả giò Việt Nam hoặc xúc xích. Sản phẩm của Hạ Long Canfoco đã nhận được sự tin dùng rộng khắp và đã giành được nhiều giải thưởng uy tín tại Việt Nam như "Hàng Việt Nam Chất lượng cao", "Thực phẩm Tốt nhất của Việt Nam" & "Sao Vàng Việt Nam".',
                'original_price' => 34500,
                'discount_percent' => 16,
                'discounted_price' => 29000,
                'product_type' => 'store_selling',
                'stock_quantity' => 7,
                'store_id' => 1,
                'category_id' => 9,
                'expiration_date' => Carbon::createFromFormat('d/m/Y', '02/07/2025')->format('Y-m-d'),
                'rating' => 4.8,
                'origin' => 'Việt Nam',
                'ingredients' => null,
                'usage_instructions' => 'Dùng ăn trực tiếp hoặc chế biến thành các món ăn khác tùy ý.',
                'storage_instructions' => 'Để nơi khô ráo & thoáng mát, tránh ánh nắng trực tiếp.',
            ],
            [
                'id' => 27,
                'name' => 'Cá Nục Sốt Cà Ba Cô Gái 155G',
                'description' => 'Cá Nục Sốt Cà Ba Cô Gái là một sản phẩm rất được ưa chuộng trên thị trường Việt Nam, được sản xuất dưới quy trình công nghệ khép kín, đảm bảo vệ sinh an toàn thực phẩm. Sản phẩm có thành phần nguyên liệu tự nhiên, qua chọn lọc kỹ lưỡng, không chứa chất bảo quản độc hại.

Thịt cá nục mềm ngọt đến tận xương, hòa quyện với nước sốt cà chua sánh mịn và một số gia vị khác, tạo nên một món ăn thơm ngon, hấp dẫn. Sản phẩm mang trọn vẹn dưỡng chất có trong cá, cung cấp cho người sử dụng nhiều vitamin và khoáng chất tốt cho sức khỏe.

Đặc biệt, sản phẩm đã qua chế biến sẵn có thể dùng ngay khi mở hoặc sau khi đun nóng. Ngoài ra, bạn có thể dễ dàng chế biến lại thành món khác tùy theo sở thích của bản thân. Sản phẩm được đóng trong lon kín, tiện lợi, vừa thích hợp dùng để thưởng thức dần cùng với gia đình, vừa có thể mang đi khi dã ngoại.',
                'original_price' => 18500,
                'discount_percent' => 16,
                'discounted_price' => 16500,
                'product_type' => 'store_selling',
                'stock_quantity' => 6,
                'store_id' => 1,
                'category_id' => 9,
                'expiration_date' => Carbon::createFromFormat('d/m/Y', '02/08/2025')->format('Y-m-d'),
                'rating' => 4.8,
                'origin' => 'Việt Nam',
                'ingredients' => null,
                'usage_instructions' => 'Dùng ăn trực tiếp hoặc chế biến thành các món ăn khác tùy ý.',
                'storage_instructions' => 'Để ngăn mát tủ lạnh.',
            ],
            [
                'id' => 28,
                'name' => 'Sữa tiệt trùng Cô gái Hà Lan không đường hộp 1lít',
                'description' => 'Sữa tiệt trùng Dutch Lady không đường được sản xuất từ sữa bò tươi, bột sữa, chất béo sữa... theo công nghệ tiên tiến trên dây chuyền hiện đại, giữ trọn được giá trị dinh dưỡng từ sữa bò. Sản phẩm thơm ngon và chứa hơn 20 dưỡng chất thiết yếu mà cơ thể không thể tự sản sinh giúp cơ thể phát triển khỏe mạnh như: cholin giúp tăng cường trí nhớ, vitamin và các khoáng chất giúp tăng cường sức đề kháng, cho răng và xương chắc khỏe...',
                'original_price' => 35900,
                'discount_percent' => 24,
                'discounted_price' => 29000,
                'product_type' => 'store_selling',
                'stock_quantity' => 6,
                'store_id' => 3,
                'category_id' => 10,
                'expiration_date' => Carbon::createFromFormat('d/m/Y', '02/09/2025')->format('Y-m-d'),
                'rating' => 4.8,
                'origin' => 'Việt Nam',
                'ingredients' => null,
                'usage_instructions' => 'Dùng trực tiếp, lắc đều trước khi uống. Ngon hơn khi uống lạnh.',
                'storage_instructions' => 'Để ngăn mát tủ lạnh.',
            ],
            [
                'id' => 29,
                'name' => 'Sữa KUN vị cacao lúa mạch hộp 110ml',
                'description' => 'Sữa KUN vị cacao lúa mạch hộp 110ml',
                'original_price' => 20000,
                'discount_percent' => 18,
                'discounted_price' => 16500,
                'product_type' => 'store_selling',
                'stock_quantity' => 9,
                'store_id' => 2,
                'category_id' => 10,
                'expiration_date' => Carbon::createFromFormat('d/m/Y', '02/06/2025')->format('Y-m-d'),
                'rating' => 4.8,
                'origin' => 'Việt Nam',
                'ingredients' => null,
                'usage_instructions' => 'Dùng trực tiếp, lắc đều trước khi uống. Ngon hơn khi uống lạnh.',
                'storage_instructions' => 'Để ngăn mát tủ lạnh.',
            ],
            [
                'id' => 30,
                'name' => 'Sữa Chua Vinamilk Ít Đường Hũ 100G',
                'description' => 'Sữa Chua Vinamilk Ít Đường chỉ chứa 7% đường, phù hợp với những người cần kiểm soát lượng đường trong khẩu phần ăn.
Được sản xuất từ sữa tươi nguyên chất, sử dụng công nghệ lên men hiện đại từ châu Âu, đảm bảo hương vị thơm ngon và chất lượng dinh dưỡng.
Sản phẩm giàu canxi và vitamin, hỗ trợ phát triển xương chắc khỏe và tăng cường sức đề kháng cho cơ thể.
Không chứa chất bảo quản, sản phẩm an toàn cho sức khỏe, phù hợp cho cả gia đình.',
                'original_price' => 6500,
                'discount_percent' => 50,
                'discounted_price' => 3500,
                'product_type' => 'store_selling',
                'stock_quantity' => 9,
                'store_id' => 1,
                'category_id' => 10,
                'expiration_date' => Carbon::createFromFormat('d/m/Y', '02/06/2025')->format('Y-m-d'),
                'rating' => 4.8,
                'origin' => 'Việt Nam',
                'ingredients' => null,
                'usage_instructions' => 'Dùng trực tiếp, ngon hơn khi uống lạnh.',
                'storage_instructions' => 'Để ngăn mát tủ lạnh.',
            ],

        ];

        foreach ($products as $productData) {
            Product::create($productData);
        }
    }
}