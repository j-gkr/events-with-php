import { Controller, Get, Post, Body } from '@nestjs/common';
import { CreateEventDto } from './dto/create-event.dto';
import { EventService } from './event.service';
import { Event } from './event.entity';
import { v4 as uuid4 } from 'uuid';

@Controller('events')
export class EventController {
  constructor(private readonly eventService: EventService) {}

  @Get()
  async findAll(): Promise<Event[]> {
    return this.eventService.findAll();
  }

  @Post()
  async create(@Body() createEventDto: CreateEventDto): Promise<Event> {
    createEventDto.eventId = uuid4();
    return this.eventService.create(createEventDto);
  }
}