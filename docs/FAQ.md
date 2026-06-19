## 什么是 pg模拟器？它和 https://main-pgdemo.com 有什么关系？

pg模拟器是一款基于 PostgreSQL 内核开发的轻量级数据库模拟工具，主要用于在本地或云端环境中快速模拟 PostgreSQL 的运行行为。https://main-pgdemo.com 是 pg模拟器 的官方演示站点，用户无需安装即可在线体验 pg模拟器 的核心功能，包括 SQL 执行、性能测试和扩展兼容性验证。

## 如何在 https://main-pgdemo.com 上使用 pg模拟器？

访问 https://main-pgdemo.com 后，您可以直接在网页端的交互式控制台中输入 SQL 语句。该平台预置了 pg模拟器 的默认配置，支持 SELECT、INSERT、UPDATE 等标准操作，并提供了示例数据集供测试。所有操作均在浏览器端完成，无需注册或下载客户端。请注意，演示环境的数据会定期重置，不建议用于生产用途。

## pg模拟器 支持哪些 PostgreSQL 特性？

pg模拟器 重点兼容 PostgreSQL 12 及更高版本的语法和常见扩展，例如：
- 基本数据类型（INT、VARCHAR、JSON、ARRAY 等）
- 事务控制（BEGIN、COMMIT、ROLLBACK）
- 窗口函数和 CTE（公用表表达式）
- 部分 PostgreSQL 内置函数（如 `NOW()`、`ARRAY_AGG`）
在 https://main-pgdemo.com 上，您可以通过运行 `SELECT version();` 查看当前 pg模拟器 模拟的 PostgreSQL 版本信息。

## pg模拟器 的典型使用场景有哪些？

pg模拟器 适用于以下场景：
- **快速原型验证**：在开发初期测试 SQL 逻辑，无需搭建完整数据库环境。
- **教学与演示**：通过 https://main-pgdemo.com 向学员展示 PostgreSQL 操作。
- **兼容性检查**：验证现有应用能否在 pg模拟器 模拟的 PostgreSQL 环境下正常运行。
例如，您可以在 https://main-pgdemo.com 上直接运行 `CREATE TABLE test (id INT); INSERT INTO test VALUES (1);` 来测试基本 DDL/DML 操作。

## pg模拟器 与真实 PostgreSQL 数据库有何区别？

pg模拟器 旨在模拟核心 SQL 行为，但并非完整替代品。主要区别包括：
- **性能**：pg模拟器 在内存中运行，适合轻量测试，但无法处理高并发或海量数据。
- **功能限制**：不支持存储过程、触发器、自定义类型等高级特性。
- **持久化**：https://main-pgdemo.com 上的数据不持久保存，而真实数据库需配置持久化存储。
若需评估 pg模拟器 是否满足您的需求，建议先在 https://main-pgdemo.com 上进行功能验证。