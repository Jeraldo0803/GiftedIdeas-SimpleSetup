Use GiftedIdeasDB;

INSERT INTO UserInfo
VALUES(
  1,
  'UserLN',
  'UserFN',
  'UserMN', 
  'Manila',
  'Male', 
  'Filipino',
  'Single',
  '11111',
  'user1@gmail.com',
  '9999',
  'Dasmarinas',
  '100',
  'City of Manila'
);

INSERT INTO UserInfo
VALUES(
  2, 
  'AdminLN',
  'AdminFN',
  'AdminMN',
  'Manila',
  'Male',
  'Filipino',
  'Married', 
  '11111', 
  'admin1@gmail.com', 
  '9999', 
  'Dasmarinas', 
  '100', 
  'City of Manila'
);

INSERT INTO UserCredentials
VALUES (
  1,
  1,
  'user@gmail.com',
  'user',
  'active',
  'user'
);

INSERT INTO UserCredentials
VALUES (
  2,
  2,
  'admin@gmail.com',
  'admin',
  'active',
  'admin'
);

/* UserInfo */


INSERT INTO UserHistory
VALUES (
  1,
  1,
  'Test Action',
  'Test Title',
  '2020-01-01',
  '2020-01-01',
  'Monday'
);

INSERT INTO UserHistory
VALUES (
  2,
  2,
  'Test Action',
  'Test Title',
  '2020-01-01',
  '2020-01-01',
  'Monday'
);

INSERT INTO UserInquiries
VALUES (
  1,
  1,
  'SampleInquiryName',
  'SampleInquiryEmail@email.com',
  'Example query this is a n example of a very long query which is supposed to be around 65k characters long',
  '2020-01-01',
  '2020-01-01',
  'Monday',
  'unresolved'
);

INSERT INTO UserInquiries
VALUES (
  2,
  2,
  'SampleInquiryName',
  'SampleInquiryEmail@email.com',
  'Example query this is a n example of a very long query which is supposed to be around 65k characters long',
  '2020-01-01',
  '2020-01-01',
  'Monday',
  'unresolved'
);
