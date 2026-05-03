import { TestBed } from '@angular/core/testing';

import { Rutinasespartanasservice } from './rutinasespartanasservice';

describe('Rutinasespartanasservice', () => {
  let service: Rutinasespartanasservice;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(Rutinasespartanasservice);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
